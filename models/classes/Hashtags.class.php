<?php
	class Hashtags {
		public $text = "";
		//to get the nded variable when the Hashtags class in instantiated
		public function __construct ($text) {
			$this->text=$text;
		}
		//main method that handles majority of the work
		public function getHashtags() {
			//declaring necessary variables
			$hashtagged = $this->text;
			$hashtags="";
			$editHash="";
			/* To ensure that the text inputed is space-free and returns an array with the individual words  */
			$arrayHash= preg_split('/\s+/', trim($hashtagged)); 
			

			//loop to loop through all the words and work on each of them. as you'll see the words all went through a selection process that refined them to the beautiful tags the user sees 
			for ($i=0;$i<count($arrayHash);$i++) {
					
					
					$editHash=$arrayHash[$i];
					//to get the position of the # in each word, in order to ensure that ords like show#time don't get shown to the user. the below line gets rid of symbols
					$strippedHash=strpos($editHash,"#"); 
					
					$newHash=str_replace("!?","","$editHash");
					
					
				//if we have assured that the hashtag is at the beginning of the word, THE REAL MAGIC BEGINS here
				if ( $strippedHash == 0) {
					$ready=preg_match('/#+([a-zA-Z0-9_]+)/',$newHash);
					if ($ready) {
							$stripped= str_replace("#","",$newHash);
								
								if (!empty($stripped)) {
									$hashtags.=$stripped.",";
								 }
						 
					}				
				}
				

				}
				//end. returns the hashtags that were chosen. "many are called, but few are chosen".
				return $hashtags;
			}
			
				

			
		}
	


?>