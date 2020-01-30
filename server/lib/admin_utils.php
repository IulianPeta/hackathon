<?php
/**
 * Created by PhpStorm.
 * User: Zoli
 * Date: 04.03.2018
 * Time: 16:22
 */
final class admin_utils
{
  static function validate_email_format($email)
  {
    $pattern="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
    if(preg_match($pattern,$email))
    {
      return true;
    }
    else
    {
      return false;
    }
  }
  static function generateRandomString($length=10)
  {
    $characters='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength=strlen($characters);
    $randomString='';
    $rand_function_name="rand";
    if(function_exists("mt_rand"))
    {
      $rand_function_name="mt_rand";
    }
    for($i=0;$i<$length;$i++)
    {
      $randomString.=$characters[$rand_function_name(0,$charactersLength-1)];
    }
    return $randomString;
  }
  static function eliminate_all_non_alphanumeric($output)
  {
    $output=admin_utils::eliminate_special_chars($output);
    $output=str_replace(".","",$output);
    $output=str_replace("_","",$output);
    $output=str_replace("-","",$output);
    $output=str_replace("*","",$output);
    $output=str_replace("#","",$output);
    $output=str_replace("(","",$output);
    $output=str_replace(")","",$output);
    $output=str_replace("[","",$output);
    $output=str_replace("]","",$output);
    $output=str_replace("{","",$output);
    $output=str_replace("}","",$output);
    $output=str_replace(" ","",$output);
    return $output;
  }
  static function eliminate_special_chars($input)
  {
    $output=$input;
    $output=str_replace("é","e",$output);
    $output=str_replace("è","e",$output);
    $output=str_replace("ę","e",$output);
    $output=str_replace("à","a",$output);
    $output=str_replace("ą","a",$output);
    $output=str_replace("ä","a",$output);
    $output=str_replace("â","a",$output);
    $output=str_replace("ù","u",$output);
    $output=str_replace("û","u",$output);
    $output=str_replace("ç","c",$output);
    $output=str_replace("č","c",$output);
    $output=str_replace("ć","c",$output);
    $output=str_replace("đ","d",$output);
    $output=str_replace("š","s",$output);
    $output=str_replace("ž","z",$output);
    $output=str_replace("ô","o",$output);
    $output=str_replace("ő","o",$output);
    $output=str_replace("ó","o",$output);
    $output=str_replace("ö","o",$output);
    $output=str_replace("°","o",$output);
    $output=str_replace("ï","i",$output);
    $output=str_replace("î","i",$output);
    $output=str_replace("ł","l",$output);
    /*
     * Capital letter variant
     */
    $output=str_replace(strtoupper("é"),strtoupper("e"),$output);
    $output=str_replace(strtoupper("è"),strtoupper("e"),$output);
    $output=str_replace(strtoupper("ę"),strtoupper("e"),$output);
    $output=str_replace(strtoupper("à"),strtoupper("a"),$output);
    $output=str_replace(strtoupper("ą"),strtoupper("a"),$output);
    $output=str_replace(strtoupper("â"),strtoupper("a"),$output);
    $output=str_replace(strtoupper("ä"),strtoupper("a"),$output);
    $output=str_replace(strtoupper("ù"),strtoupper("u"),$output);
    $output=str_replace(strtoupper("û"),strtoupper("u"),$output);
    $output=str_replace(strtoupper("ç"),strtoupper("c"),$output);
    $output=str_replace(strtoupper("č"),strtoupper("c"),$output);
    $output=str_replace(strtoupper("ć"),strtoupper("c"),$output);
    $output=str_replace(strtoupper("đ"),strtoupper("d"),$output);
    $output=str_replace(strtoupper("š"),strtoupper("s"),$output);
    $output=str_replace(strtoupper("ž"),strtoupper("z"),$output);
    $output=str_replace(strtoupper("ô"),strtoupper("o"),$output);
    $output=str_replace(strtoupper("ő"),strtoupper("o"),$output);
    $output=str_replace(strtoupper("ó"),strtoupper("o"),$output);
    $output=str_replace(strtoupper("ö"),strtoupper("o"),$output);
    $output=str_replace(strtoupper("°"),strtoupper("o"),$output);
    $output=str_replace(strtoupper("ï"),strtoupper("i"),$output);
    $output=str_replace(strtoupper("î"),strtoupper("i"),$output);
    $output=str_replace(strtoupper("ł"),strtoupper("l"),$output);
    /*
     * End
     */
    $output=str_replace("~","",$output);
    $output=str_replace("`","",$output);
    $output=str_replace("!","",$output);
    $output=str_replace("@","",$output);
    $output=str_replace("#","",$output);
    $output=str_replace('$',"",$output);
    $output=str_replace("§","",$output);
    $output=str_replace("%","",$output);
    $output=str_replace("^","",$output);
    $output=str_replace("&","",$output);
    $output=str_replace("*","",$output);
    $output=str_replace("=","",$output);
    $output=str_replace("+","",$output);
    $output=str_replace("\\","",$output);
    $output=str_replace("<","",$output);
    $output=str_replace(">","",$output);
    $output=str_replace(" ","_",$output);
    $output=str_replace("'","_",$output);
    $output=str_replace("\"","_",$output);
    $output=str_replace("/","_",$output);
    $output=str_replace(";","",$output);
    $output=str_replace(",","",$output);
    $output=str_replace("?","",$output);
    $output=str_replace("(","_",$output);
    $output=str_replace(")","_",$output);
    $output=str_replace("[","_",$output);
    $output=str_replace("]","_",$output);
    $output=str_replace("{","_",$output);
    $output=str_replace("}","_",$output);
    return $output;
  }
  static function validate_uploaded_file($FILE,$restriction=null)
  {
    $ok=false;
    if(empty($FILE))
    {
      die("File is empty");
      return false;
    }
    if(empty($FILE["tmp_name"]))
    {
      return false;
    }
    $finfo=finfo_open(FILEINFO_MIME_TYPE);
    $mimetype=finfo_file($finfo,$FILE['tmp_name']);
    if($FILE['size']!=0&&preg_match('/(\.exe)|(\.dll)|(\.com)$/',strtolower($FILE['name']))==0)
    {
      if(!preg_match('/(application\/exe)|(application\/x\-exe)|(application\/x\-msdownload)/',$mimetype))
      {
        $ok=true;
      }
      else
      {
        $ok=false;
      }
    }
    else
    {
      $ok=false;
    }
    if(!empty($restriction))
    {
      $additional_ok=false;
      $restriction=strtolower($restriction);
      switch($restriction)
      {
        case "images":
          if($FILE['size']!=0&&preg_match('/(\.jpg)|(\.png)|(\.jpeg)$/',strtolower($FILE['name'])))
          {
            if(preg_match('/(image\/jpeg)|(image\/png)/',$mimetype))
            {
              $additional_ok=true;
            }
            else
            {
              $additional_ok=false;
            }
          }
          else
          {
            $additional_ok=false;
          }
        break;
        case "images_extended":
          if($FILE['size']!=0&&preg_match('/(\.jpg)|(\.png)|(\.jpeg)|(\.ai)|(\.psd)|(\.eps)|(\.pdf)|(\.gif)|(\.zip)$/',strtolower($FILE['name'])))
          {
            if(preg_match('/(image\/)|(application\/pdf)|(application\/zip)/',$mimetype))
            {
              $additional_ok=true;
            }
            else
            {
              $additional_ok=false;
            }
          }
          else
          {
            $additional_ok=false;
          }
        break;
        case "images_documents_zip":
          if($FILE['size']!=0&&preg_match('/(\.jpg)|(\.png)|(\.jpeg)|(\.doc)|(\.docx)|(\.xls)|(\.pdf)|(\.xlsx)|(\.zip)$/',strtolower($FILE['name'])))
          {
            if(preg_match('/(image\/)|(application\/pdf)|(application\/zip)|(application\/msword)|(application\/vnd\.ms\-excel)|(application\/vnd\.openxmlformats)/',$mimetype))
            {
              $additional_ok=true;
            }
            else
            {
              $additional_ok=false;
            }
          }
          else
          {
            $additional_ok=false;
          }
        break;
        case "pdf":
          if($FILE['size']!=0&&preg_match('/(\.pdf)$/',strtolower($FILE['name'])))
          {
            if(preg_match('/(application\/pdf)/',$mimetype))
            {
              $additional_ok=true;
            }
            else
            {
              $additional_ok=false;
            }
          }
          else
          {
            $additional_ok=false;
          }
        break;
        case "xml":
          if($FILE['size']!=0&&preg_match('/(\.xml)$/',strtolower($FILE['name'])))
          {
            if(preg_match('/(application\/xml)|(text\/xml)/',$mimetype))
            {
              $additional_ok=true;
            }
            else
            {
              $additional_ok=false;
              //die("Mimetype bad ".$mimetype);
            }
          }
          else
          {
            //die("Extension bad");
          }
        break;
        case "documents":
          if($FILE['size']!=0&&preg_match('/(\.pdf)|(\.zip)$/',strtolower($FILE['name'])))
          {
            if(preg_match('/(application\/pdf)|(application\/zip)/',$mimetype))
            {
              $additional_ok=true;
            }
            else
            {
              $additional_ok=false;
            }
          }
          else
          {
            $additional_ok=false;
          }
          //die("Value: ".$additional_ok." Exe block value: ".$ok);
        break;
        case "csv":
          //die($mimetype);
          if($FILE['size']!=0&&preg_match('/(\.csv)$/',strtolower($FILE['name'])))
          {
            if(preg_match('/(text\/csv)|(application\/vnd\.ms\-excel)|(text\/plain)/',$mimetype))
            {
              $additional_ok=true;
            }
            else
            {
              $additional_ok=false;
            }
          }
          else
          {
            $additional_ok=false;
          }
        break;
      }
    }
    else
    {
      $additional_ok=true;
    }
    $combined_value=$additional_ok&&$ok;
    //die("Combined value: ".$combined_value);
    return $combined_value;
  }
}