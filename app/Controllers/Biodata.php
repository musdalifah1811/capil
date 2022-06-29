<?php

namespace App\Controllers;

use App\Models\homeModel;
use App\Controllers\BaseController;

class Biodata extends BaseController
{
	public function index()
	{
		//
	}
	public function Haldep()
	{
		echo view("haldep");
	}
	public function Home()
	{
		echo view("home");
	}
	public function Arsip()
	{
		echo view("arsip");
	}
	public function Referensi()
	{
		echo view("referensi");
	}
	public function Data()
	{
		echo view("data");
	}
	public function File()
	{
		echo view("File");
	}
	public function hubungisaya()
	{
		echo view("");
	}
}