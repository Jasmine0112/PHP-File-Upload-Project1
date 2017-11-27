<?php 
class display extends page
{
	public function get()
	{
		
		$this->html .= htmltage::tablestart();
		$csvfile = file("./upload/".$_GET['filename']);
		foreach($csvfile as $i =>$k)
		{
			$this->html .= htmltage::tablelinestart();
			foreach(explode(",",$k) as $j)
			{
				$this->html .= htmltage::tabledetail($j);
			}
			$this->html .= htmltage::tablelineend();
		}    
		$this->html .= htmltage::tableend();
	}
}
 ?>
