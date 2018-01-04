<?php 
// defined('BASEPATH') or exit ('No direct access allowed.');

  class anime
 	{

     public function description($anime_ID){
      include ('db.php');
      $SQL_desc = "SELECT * FROM anime_description WHERE desc_ani_ID ='".$anime_ID."' ";
        // $conn->Query($SQL);
        $desc_q = $conn->prepare($SQL_desc);
        $desc_q->execute();
        $desc_result = $desc_q->fetch(PDO::FETCH_ASSOC);
        $desc_detail = $desc_result['desc_detail'];
        return $desc_detail;
      }
      public function episode($anime_ID){
      include ('db.php');
      $SQL_desc = "SELECT * FROM anime_episode WHERE ep_ani_ID ='".$anime_ID."' ";
        // $conn->Query($SQL);
        $desc_q = $conn->prepare($SQL_desc);
        $desc_q->execute();
        $desc_result = $desc_q->fetchAll(PDO::FETCH_ASSOC);
        return $desc_result;
      }
      public function episode_id($anime_ID,$ep){
      include ('db.php');
      $SQL_aniEp= "SELECT * FROM anime_episode WHERE ep_ani_ID ='".$anime_ID."' AND ep_num = '".$ep."'";
        $ep_q = $conn->prepare($SQL_aniEp);
        $ep_q->execute();
        $ep_results = $ep_q->fetch(PDO::FETCH_ASSOC);
        $ep_ID = $ep_results['ep_ID'];
        return $ep_ID;
      }
      public function mirror_Type($mrtype){
        include ('db.php');
        $SQL_mrtype= " SELECT * FROM `mirror_type` WHERE mtype_ID = '".$mrtype."'";
        $mrtype_q = $conn->prepare($SQL_mrtype);
        $mrtype_q->execute();
        $mrtype_results = $mrtype_q->fetch(PDO::FETCH_ASSOC);
        $mtype_name = $mrtype_results['mtype_name'];
        return $mtype_name;
      }
      public function language_type($lang_type){
        include ('db.php');
        $SQL_lang= " SELECT * FROM `language_type` WHERE lang_ID = '".$lang_type."'";
        $lang__q = $conn->prepare($SQL_lang);
        $lang__q->execute();
        $lang_results = $lang__q->fetch(PDO::FETCH_ASSOC);
        $lang_name = $lang_results['lang_name'];
        return $lang_name;
      }

    
    }
 $anime = new anime; 

 //  echo $anime->description('1');
?>