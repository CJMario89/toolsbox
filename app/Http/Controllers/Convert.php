<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Exception;

class Convert extends Controller
{
    //
    public function convert(Request $request){
        $type = $request->query("type");
        try{
            if(1){
                $files = $request->file('files');
                $converted = array();
                $i = 0;
                foreach($files as $file){
                    $fileName = $file->getSize();//using size as temporary filename //avoid race condition
                    $path = $file->storeAs('/public', $fileName, 'local');
                    $from = $this->getFromFileFormate(explode('.', $file->getClientOriginalName())[1]);
                    $to = $this->getToFileFormate($type);
                    $convert = "(cd ../storage/app/public && export HOME=/var/www/toolsbox/storage/app/public && libreoffice --infilter='".$from."' --headless --convert-to ".$type.":'".$to."' ".$fileName.")";
                    shell_exec($convert);
                    shell_exec("(cd ../storage/app/public && rm ".$fileName.")");
                    $convertedfileName = explode('.', $file->getClientOriginalName())[0].".".$type;
                    $convertedFile = file_get_contents(__DIR__."/../../../storage/app/public/".$fileName.".".$type);

                    $converted[$i]["fileName"] = $convertedfileName;
                    $converted[$i]["file"] = base64_encode($convertedFile);
                    shell_exec("(cd ../storage/app/public && rm ".$fileName.".".$type.")");
                    $i++;
                }
                return response()->json($converted);
            }else{
                //not exist or too big
                return response()->json(['message','file not valid'], 200);
            }
        }catch(Exception $e){
            return response()->json(['message',$e], 401);
        }
    }

    public function WordToPDF(Request $request){
        $type = $request->query("type");
        try{
            $files = $request->file('files');
            $converted = array();
            $i = 0;
            foreach($files as $file){
                $dir = $this->getRandomString();
                $fileName = explode('.', $file->getClientOriginalName())[0];
                $path = $file->storeAs('/public'."/".$dir, $fileName, 'local');
                $from = $this->getFromFileFormate(explode('.', $file->getClientOriginalName())[1]);
                $to = $this->getToFileFormate($type);
                $convert = "(cd ../storage/app/public/".$dir." && export HOME=/var/www/toolsbox/storage/app/public/".$dir." && libreoffice --infilter='".$from."' --headless --convert-to ".$type.":'".$to."' ".$fileName.")";
                shell_exec($convert);
                shell_exec("(cd ../storage/app/public/".$dir." && rm ".$fileName.")");
                $convertedfileName = $fileName.".".$type;
                //$convertedFile = file_get_contents(__DIR__."/../../../storage/app/public/".$fileName.".".$type);
                $convertedFile = url('/storage')."/".$dir."/".$fileName.".".$type;

                $converted[$i]["fileName"] = $convertedfileName;
                $converted[$i]["file"] = $convertedFile;
                //shell_exec("(cd ../storage/app/public && rm ".$fileName.".".$type.")");
                $i++;
            }
            return response()->json($converted);
            
        }catch(Exception $e){
            return response()->json(['message',$e], 401);
        }
    }

    private function getRandomString(){
        $char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $rand = '';
        for($i = 0; $i < 64; $i++){
            $rand = $rand.$char[rand(0, strlen($char) - 1)];
        }
        return $rand;
    }

    private function getToFileFormate($type){
        if($type == "pdf"){
            return "writer_pdf_Export";
        }else if($type == "docx"){
            return "Office Open XML Text";
        }else if($type == "odf"){
            return "math8";
        }
    }

    private function getFromFileFormate($type){
        if($type == "pdf"){
            return "writer_pdf_import";
        }else if($type == "docx"){
            return "Office Open XML Text";
        }else if($type == "odf"){
            return "math8";
        }
    }
}
