<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '
        <li class="active-link">
          <a href="'.site_url('home').'"><i class="fa fa-desktop "></i>Beranda </a>
        </li>

         <li class="active-link">
          <a href="'.site_url('kontak').'"><i class="fa fa-male "></i>Kontak </a>
        </li>

        <li class="active-link">
          <a href="'.site_url('admin').'"><i class="fa fa-table "></i>Data Admin</a>
        </li>

        <li class="active-link">
          <a href="'.site_url('hunian').'"><i class="fa fa-table "></i>Data Kamar Kost </a>
        </li>

        <li class="active-link">
          <a href="'.site_url('fasilitas').'"><i class="fa fa-table "></i>Fasilitas Umum </a>
        </li>
        <li class="active-link">
          <a href="'.site_url('member/data_member').'"><i class="fa fa-table "></i>Data Member</a>
        </li>

        <li class="active-link">
          <a href="'.site_url('pesan').'"><i class="fa fa-table "></i>Data Pesan</a>
        </li>

        <li class="active-link">
          <a href="'.site_url('sewa').'"><i class="fa fa-table "></i>Data Sewa</a>
        </li> ';
        
	}

