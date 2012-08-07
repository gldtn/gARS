<?php

class gldtn_GARS_Listener_Listener
{
	public static function extendForumController($class, array &$extend)
	{
		if ($class == 'Xenforo_ControllerPublic_Forum')
		{
			$extend[] = 'gldtn_GARS_ControllerPublic_Forum';
		}
	}
}