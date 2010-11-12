<?php
$this->load->helper('form');
validation_errors();
$attributes = array('id' => 'daftar-kursus', 'class' => 'ajax_form');
echo form_open('daftar', $attributes);

// Fullname
$my_name = array(
              'name'        => 'name',
              'id'          => 'name',
              'value'       => '',
              'class'       => 'text_input is_required'
            );
echo '<p>'.form_input($my_name).form_label('Nama Penuh<span style="color:red">*</span>', 'name').'</p>';

// IC
$my_ic = array(
              'name'        => 'ic',
              'id'          => 'ic',
              'value'       => '',
              'maxlength'   => '14',
              'class'       => 'text_input is_required'
            );
echo '<p>'.form_input($my_ic).form_label('No Kad Pengenalan<span style="color:red">*</span>', 'ic').'</p>';
echo '<div id=\"status\"></div>';

// Password
$my_password = array(
              'name'        => 'password',
              'id'          => 'password',
              'value'       => '',
              'maxlength'   => '20',
              'class'       => 'text_input is_required'
            );
echo '<p>'.form_password($my_password).form_label('Kata Laluan<span style="color:red">*</span>', 'password').'</p>';

// E-mail
$my_emel_label = array('class' => 'blocklabel');
$my_emel = array('name' => 'emel', 
                'id'    => 'emel',
                'value' => '',
                'class' => 'text_input is_required');
echo '<p>'.form_input($my_emel).form_label('E-mail<span style="color:red">*</span>', 'emel').'</p>';

// Telefon bimbit
$my_telefon_bimbit_label = array('class' => 'blocklabel');
$my_telefon_bimbit = array(
                'name' => 'tel_bimbit', 
                'id'    => 'tel_bimbit',
                'value' => '+601',
                'maxlength' => '20',
                'class' => 'text_input');
echo '<p>'.form_input($my_telefon_bimbit).form_label('Telefon Bimbit', 'tel_bimbit').'</p>';

// Telefon pejabat
$my_telefon_pej_rumah_label = array('class' => 'blocklabel');
$my_telefon_pej_rumah = array(
                'name' => 'tel_pej_rumah', 
                'id'    => 'tel_pej_rumah',
                'value' => '+60',
                'maxlength' => '20',
                'class' => 'text_input is_required');
echo '<p>'.form_input($my_telefon_pej_rumah).form_label('Telefon pejabat/rumah', 'tel_pej_rumah').'</p>';

// Address
$my_address_label = array(
              'class'       => 'blocklabel',
            );
echo form_label('Alamat', 'alamat', $my_address_label);
$my_address = array(
              'name'        => 'address',
              'id'          => 'address',
              'value'       => '',
              'rows'   		=> '5',
              'cols'        => '70',
              'class'       => 'text_area is_empty'
            );
echo '<p>'.form_textarea($my_address).'</p>';

// Umur
$my_umur_label = array('class' => 'blocklabel');
$my_umur = array('name' => 'umur', 
                'id'    => 'umur',
                'value' => '00',
                'maxlength' => '2',
                'class' => 'text_input is_required');
echo '<p>'.form_input($my_umur).form_label('Umur', 'umur').'</p>';


// Jantina
$jantina = array(
                  'none'  		=> '- Sila Pilih -',
                  'lelaki'    	=> 'Lelaki',
                  'perempuan'  	=> 'Perempuan'
                );
echo '<p>'.form_dropdown('jantina', $jantina, 'none')
    .form_label('Jantina', 'jantina', array('class' => 'blocklabel')).'</p>';

// Status perkahwinan
$status_perkahwinan = array(
                  'none'  		=> '- Sila Pilih -',
                  'bujang'    	=> 'Bujang',
                  'berkahwin'  	=> 'Berkahwin',
				  'tunggal'  	=> 'Ibu Tunggal',
				  'class' 		=> 'text_input'
                );
echo '<p>'.form_dropdown('status_perkahwinan', $status_perkahwinan, 'none')
    .form_label('Status Perkahwinan', 'status', array('class' =>  'blocklabel')).'</p>';

// Kelulusan
$my_kelulusan = array(
                    'none'      => '- Sila Pilih -',
                    'tiada'     => 'Tiada',
                    'pmr'       => 'SRP/PMR',
                    'spm'       => 'SPM',
                    'stpm'      => 'STPM',
                    'diploma'   => 'Diploma',
                    'sarjana muda' => 'Ijazah Sarjana Muda',
                    'sarjana'   => 'Ijazah Sarjana',
                    'phd'       => 'Ijazah Kedoktoran (PhD)');
echo '<p>'.form_dropdown('my_kelulusan', $my_kelulusan, 'none')
    .form_label('Kelulusan Akademik', 'kelulusan', 'class="blocklabel"').'</p>';

// Agensi/pekerjaan
$my_pekerjaan = array(
                    'none'          => '- Sila Pilih -',
                    'mardi'         => 'MARDI',
                    'kerajaan'      => 'Agensi Kerajaan',
                    'usahawan'      => 'Usahawan',
                    'swasta'        => 'Swasta',
                    'antarabangsa'  => 'Antarabangsa',
                    'kerja sendiri' => 'Bekerja sendiri/Awam');
echo '<p>'.form_dropdown('my_pekerjaan', $my_pekerjaan, 'none')
    .form_label('Pekerjaan sekarang', 'pekerjaan', array('class' => 'blocklabel')).'</p>';

// Perusahaan
$my_umur = array('name' => 'my_perusahaan', 
                'id'    => 'my_perusahaan',
                'class' => 'text_input');
                
echo '<p>'.form_input($my_umur).form_label('Perniagaan diusahakan sekarang', 'my_perusahaan').'</p>';

// Nama Majikan
$majikan_nama = array('name' => 'majikan_nama', 
                'id'    => 'majikan_nama',
                'class' => 'text_input');
                
echo '<p>'.form_input($majikan_nama).form_label('Nama Majikan', 'majikan_nama').'</p>';

// Telefon Majikan
$majikan_telefon = array('name' => 'majikan_telefon', 
                'id'    => 'majikan_telefon',
                'class' => 'text_input');
                
echo '<p>'.form_input($majikan_telefon).form_label('No Telefon Majikan', 'majikan_telefon').'</p>';

// Alamat Majikan
echo form_label('Alamat Majikan', 'majikan_alamat', array('class' => 'blocklabel'));
$my_address = array(
              'name'        => 'majikan_alamat',
              'id'          => 'majikan_alamat',
              'rows'   		=> '5',
              'cols'        => '70',
              'class'       => 'text_area is_empty'
            );
echo '<p>'.form_textarea($my_address).'</p>';


// Buttons
$submit = array(
    'name'        => 'hantar',
    'id'          => 'send',
	'value'       => 'Hantar',
    'class'       => 'button'
    );
echo form_submit($submit);
echo '&nbsp;';
$reset = array(
    'name'        => 'batal',
    'id'          => 'batal',
	'value'       => 'Batal',
    'class'       => 'button'
    );
echo form_reset($reset);

// Form close
echo form_close();

?>