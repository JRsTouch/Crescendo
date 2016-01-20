<?php
	
	namespace Manager;

	class MusiquesManager extends \W\Manager\Manager {

		/**
		 * Mise à jours en BDD , en fonction de l'ID parent, l'id de la chanson. 
		**/
		public function updateMusiques(array $data, $id, $stripTags = true){

			if (!is_numeric($id)){
				return false;
			}
			
			$sql = "UPDATE " . $this->table . " SET ";
			foreach($data as $key => $value){
				$sql .= "$key = :$key, ";
			}
			$sql = substr($sql, 0, -2);
			$sql .= " WHERE id_chanson = :id";

			$sth = $this->dbh->prepare($sql);
			foreach($data as $key => $value){
				$value = ($stripTags) ? strip_tags($value) : $value;
				$sth->bindValue(":".$key, $value);
			}
			$sth->bindValue(":id", $id);
			return $sth->execute();
		}
	
	}