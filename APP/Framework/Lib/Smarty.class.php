<?php
class Smarty{
	public $template_dir='./templates/';	//默认模板目录
	public $templatec_dir='./templates_c/';	//默认混编目录

	private $tpl_var=array();
	//赋值
	public function assign($k,$v){
		$this->tpl_var[$k]=$v;
	}
	/*
	*作用：编译模板
	*@param $tpl string 模板的名字
	*/
	public function compile($tpl){
		$tpl_file=$this->template_dir.$tpl;	            //拼接模板地址
		$com_file=$this->templatec_dir.$tpl.'.php';		//混编文件地址
		//文件存在，并且模板文件修改时间<混编文件修改时间
		if(file_exists($com_file) && filemtime($tpl_file)<filemtime($com_file))
			require $com_file;
		else{
			$str=file_get_contents($tpl_file);
			$str=str_replace('{$','<?php echo $this->tpl_var[\'',$str);	//替换左大括号
			$str=str_replace('}','\'];?>',$str);			//替换右大括号
			file_put_contents($com_file, $str);	//写入混编文件
			require $com_file;	//包含混编文件
		}
	}
}
?>