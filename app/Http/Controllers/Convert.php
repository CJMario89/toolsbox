<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


use App\Jobs\removeConvertedFile;

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
        $files = $request->file('files');
        $converted = array();
        $i = 0;
        foreach($files as $file){
            $dir = $this->getRandomString();
            $fileName = $file->getClientOriginalName();
            $fileName = $this->fileNamePreProcess($fileName);
            $path = $file->storeAs('/public'."/".$dir, $fileName, 'local');
            $from = $this->getFromFileFormate(explode('.', $file->getClientOriginalName())[1]);
            $to = $this->getToFileFormate($type);
            $convert = "(cd ../storage/app/public/".$dir." && export HOME=/var/www/toolsbox/storage/app/public/".$dir." && libreoffice --infilter='".$from."' --headless --convert-to ".$type.":'".$to."' '".$fileName."')";
            shell_exec($convert);
            //shell_exec("(cd ../storage/app/public/".$dir." && rm '".$fileName."')");
            $convertedfileName = explode('.', $file->getClientOriginalName())[0].".".$type;
            //$convertedFile = file_get_contents(__DIR__."/../../../storage/app/public/".$fileName.".".$type);
            $convertedFile = url('/storage')."/".$dir."/".explode('.', $file->getClientOriginalName())[0].".".$type;

            $converted[$i]["fileName"] = $convertedfileName;
            $converted[$i]["file"] = $convertedFile;
            //shell_exec("(cd ../storage/app/public && rm ".$fileName.".".$type.")");
            $i++;
            dispatch((new removeConvertedFile($dir, "WordToPDF"))->delay(Carbon::now()->addMinutes(10)));
        }
        return response()->json($converted);
    }


    

    public function PDFToWord(Request $request){
        $type = $request->query("type");
        $files = $request->file('files');
        $converted = array();
        $i = 0;
        foreach($files as $file){
            $dir = $this->getRandomString();
            $fileName = $file->getClientOriginalName();
            $fileName = $this->fileNamePreProcess($fileName);
            $path = $file->storeAs('/public'."/".$dir, $fileName, 'local');
            $from = $this->getFromFileFormate(explode('.', $file->getClientOriginalName())[1]);
            $to = $this->getToFileFormate($type);
            $convert = "(cd ../storage/app/public/".$dir." && export HOME=/var/www/toolsbox/storage/app/public/".$dir." && libreoffice --infilter='".$from."' --headless --convert-to ".$type.":'".$to."' '".$fileName."')";
            shell_exec($convert);
            //shell_exec("(cd ../storage/app/public/".$dir." && rm '".$fileName."')");
            $convertedfileName = explode('.', $file->getClientOriginalName())[0].".".$type;
            //$convertedFile = file_get_contents(__DIR__."/../../../storage/app/public/".$fileName.".".$type);
            $convertedFile = url('/storage')."/".$dir."/".explode('.', $file->getClientOriginalName())[0].".".$type;

            $converted[$i]["fileName"] = $convertedfileName;
            $converted[$i]["file"] = $convertedFile;
            //shell_exec("(cd ../storage/app/public && rm ".$fileName.".".$type.")");
            $i++;
            dispatch((new removeConvertedFile($dir, "PDFToWord"))->delay(Carbon::now()->addMinutes(10)));
        }
        return response()->json($converted);
    }


    public function ExcelToPDF(Request $request){
        $type = $request->query("type");
        $files = $request->file('files');
        $converted = array();
        $i = 0;
        foreach($files as $file){
            $dir = $this->getRandomString();
            $fileName = $file->getClientOriginalName();
            $fileName = $this->fileNamePreProcess($fileName);
            $path = $file->storeAs('/public'."/".$dir, $fileName, 'local');
            $from = $this->getFromFileFormate(explode('.', $file->getClientOriginalName())[1]);
            $to = $this->getToFileFormate($type);
            $convert = "(cd ../storage/app/public/".$dir." && export HOME=/var/www/toolsbox/storage/app/public/".$dir." && libreoffice --infilter='".$from."' --headless --convert-to ".$type.":'".$to."' '".$fileName."')";
            shell_exec($convert);
            //shell_exec("(cd ../storage/app/public/".$dir." && rm '".$fileName."')");
            $convertedfileName = explode('.', $file->getClientOriginalName())[0].".".$type;
            //$convertedFile = file_get_contents(__DIR__."/../../../storage/app/public/".$fileName.".".$type);
            $convertedFile = url('/storage')."/".$dir."/".explode('.', $file->getClientOriginalName())[0].".".$type;

            $converted[$i]["fileName"] = $convertedfileName;
            $converted[$i]["file"] = $convertedFile;
            //shell_exec("(cd ../storage/app/public && rm ".$fileName.".".$type.")");
            $i++;
            dispatch((new removeConvertedFile($dir, "ExcelToPDF"))->delay(Carbon::now()->addMinutes(10)));
        }
        return response()->json($converted);
    }


    public function PDFToImage(Request $request){
        $type = $request->query("type");
        $files = $request->file('files');
        $converted = array();
        $i = 0;
        foreach($files as $file){
            $dir = $this->getRandomString();
            $fileName = $file->getClientOriginalName();
            $fileName = $this->fileNamePreProcess($fileName);
            $path = $file->storeAs('/public'."/".$dir, $fileName, 'local');
            $from = $this->getFromFileFormate(explode('.', $file->getClientOriginalName())[1]);
            $to = $this->getToFileFormate($type);
            $convert = "(cd ../storage/app/public/".$dir." && export HOME=/var/www/toolsbox/storage/app/public/".$dir." && libreoffice --infilter='".$from."' --headless --convert-to ".$type.":'".$to."' '".$fileName."')";
            shell_exec($convert);
            //shell_exec("(cd ../storage/app/public/".$dir." && rm '".$fileName."')");
            $convertedfileName = explode('.', $file->getClientOriginalName())[0].".".$type;
            //$convertedFile = file_get_contents(__DIR__."/../../../storage/app/public/".$fileName.".".$type);
            $convertedFile = url('/storage')."/".$dir."/".explode('.', $file->getClientOriginalName())[0].".".$type;

            $converted[$i]["fileName"] = $convertedfileName;
            $converted[$i]["file"] = $convertedFile;
            //shell_exec("(cd ../storage/app/public && rm ".$fileName.".".$type.")");
            $i++;
            dispatch((new removeConvertedFile($dir, "PDFToImage"))->delay(Carbon::now()->addMinutes(10)));
        }
        return response()->json($converted);
    }

    public function WordToImage(Request $request){
        $type = $request->query("type");
        $files = $request->file('files');
        $converted = array();
        $i = 0;
        foreach($files as $file){
            $dir = $this->getRandomString();
            $fileName = $file->getClientOriginalName();
            $fileName = $this->fileNamePreProcess($fileName);
            $path = $file->storeAs('/public'."/".$dir, $fileName, 'local');
            $from = $this->getFromFileFormate(explode('.', $file->getClientOriginalName())[1]);
            $to = $this->getToFileFormate($type);
            $convert = "(cd ../storage/app/public/".$dir." && export HOME=/var/www/toolsbox/storage/app/public/".$dir." && libreoffice --infilter='".$from."' --headless --convert-to ".$type.":'".$to."' '".$fileName."')";
            shell_exec($convert);
            //shell_exec("(cd ../storage/app/public/".$dir." && rm '".$fileName."')");
            $convertedfileName = explode('.', $file->getClientOriginalName())[0].".".$type;
            //$convertedFile = file_get_contents(__DIR__."/../../../storage/app/public/".$fileName.".".$type);
            $convertedFile = url('/storage')."/".$dir."/".explode('.', $file->getClientOriginalName())[0].".".$type;

            $converted[$i]["fileName"] = $convertedfileName;
            $converted[$i]["file"] = $convertedFile;
            //shell_exec("(cd ../storage/app/public && rm ".$fileName.".".$type.")");
            $i++;
            dispatch((new removeConvertedFile($dir, "WordToImage"))->delay(Carbon::now()->addMinutes(10)));
        }
        return response()->json($converted);
    }

    private function getRandomString(){
        $char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $rand = '';
        for($i = 0; $i < 64; $i++){
            $rand = $rand.$char[rand(0, strlen($char) - 1)];
        }
        return $rand;
    }

    private function fileNamePreProcess($fileName){
        //for shell exec
        $fileName = str_replace("'", "\"", $fileName);
        return $fileName;
    }

    private function getToFileFormate($type){
        if($type == "pdf"){
            return "writer_pdf_Export";
        }else if($type == "docx" || $type == "doc"){
            return "MS Word 97";
        }else if($type == "odf"){
            return "math8";
        }else if($type == "xls"){
            return "MS Excel 2003 XML";
        }else if($type == "jpg"){
            return "writer_jpg_Export";
        }else if($type == "png"){
            return "writer_png_Export";
        }
    }

    private function getFromFileFormate($type){
        if($type == "pdf"){
            return "writer_pdf_import";
        }else if($type == "docx" || $type == "doc"){
            return "MS Word 97";
        }else if($type == "odf"){
            return "math8";
        }else if($type == "xls"){
            return "MS Excel 2003 XML";
        }
    }
}
