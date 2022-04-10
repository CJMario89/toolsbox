<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
                    $convert = "libreoffice --infilter=='writer_pdf_import' --headless --convert-to ".$type.":'writer_pdf_Export' ../storage/app/public/".$fileName;
                    shell_exec($convert);
                    $convertedfileName = explode('.', $file->getClientOriginalName())[0].".".$type;
                    $convertedFile = file_get_contents(__DIR__."/../../../public/".$fileName.".".$type);
                    $converted[$i]["fileName"] = $convertedfileName;
                    $converted[$i]["file"] = base64_encode($convertedFile);
                    shell_exec("rm ".$fileName.".".$type);
                    $i++;
                }
                return response()->json($converted);
            }else{
                //not exist or too big
                return response()->json(['message','file not valid'], 200);
            }
        }catch(Exception $e){
            return response()->json($e, 401);
        }
    }
}
