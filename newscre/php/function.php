<?php

class abc{
	
	function abc(){
		$this->str="";
		$this->guanlistr="";
	}
	
	function tree($pid,$flag,$db,$table,$editpid){
		$sql="select * from $table where pid=".$pid;
	    $result=$db->query($sql);
	    while($row=$result->fetch_assoc()){
	    	$id=$row["id"];
	    	if($id==$editpid){
	    		$this->str.="<option selected='' value={$id}>{$flag}{$row["cname"]}</option>";
	    	}else{
	    		$this->str.="<option value={$id}>{$flag}{$row["cname"]}</option>";
	    	}
    		$this->tree($id,$flag.$flag,$db,$table);
	   }
	}
	
	function guanlitree($pid,$flag,$db,$table){
		$sql="select * from $table where pid=".$pid;
	    $result=$db->query($sql);
	    while($row=$result->fetch_assoc()){
	    	$id=$row["id"];
	    	$this->guanlistr.="<tr>";
	    	$this->guanlistr.="<td>{$row["id"]}</td>";
	    	$this->guanlistr.="<td>{$flag}{$row["cname"]}</td>";
	    	$this->guanlistr.="<td>{$row["pid"]}</td>";
	    	$this->guanlistr.="<td><a href='delcategory.php?id={$row["id"]}' class='del'>删除</a><a href='editcategory.php?pid={$row["pid"]}&&cname={$row["cname"]}&&id={$row["id"]}' class='edit'>编辑</a></td>";
	    	$this->guanlistr.="</tr>";
    		$this->guanlitree($id,$flag.$flag,$db,$table);
	    }	
	}

		
}



?>