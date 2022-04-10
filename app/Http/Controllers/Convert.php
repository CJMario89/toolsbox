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
                    $convert = "(cd ../storage/app/public/tmp && export HOME=/tmp && libreoffice --infilter=='writer_pdf_import' --headless --convert-to ".$type.":'writer_pdf_Export' ".$fileName.")";
                    return response()->json(['message','file not valid'], 200);
                    shell_exec($convert);

                    //return response()->json(['message','file not valid'], 200);
                    //shell_exec("(cd ../storage/app/public && rm ".$fileName.")");
                    $convertedfileName = explode('.', $file->getClientOriginalName())[0].".".$type;
                    $convertedFile = file_get_contents("/tmp"."/".$fileName.".".$type);

                    $converted[$i]["fileName"] = $convertedfileName;
                    $converted[$i]["file"] = base64_encode($convertedFile);
                    //shell_exec("(cd ../storage/app/public && rm ".$fileName.")");
                    //shell_exec("(cd ../storage/app/public/tmp && rm ".$fileName.".".$type.")");
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
}
