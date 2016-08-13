<?php
namespace Org\Util;
class Tree
{
	static public $treeList=array();
	public function create($data,$pid=0)
	{
		foreach ($data as $key=>$value)
		{
			if($value['pid']==$pid)
			{
				self::$treeList[]=$value;	//用类名或者self在非静态方法中访问静态成员
				unset($data[$key]);
				self::create($data,$value['id']);
			}
		}
		return self::$treeList;//返回本类的对象
	}
}