<?php
error_reporting(error_reporting()& ~E_NOTICE);
include "../config/koneksi.php";

// PAGE SURAT

if($_GET['page']=="surat"){
    include "../page/menu/menu_surat/surat/surat.php";
}
if($_GET['page']=="acc_surat"){
    include "../page/menu/menu_surat/surat/acc_surat.php";
}
if($_GET['page']=="result"){
    include "../page/menu/menu_surat/surat/result.php";
}
if($_GET['page']=="accept"){
    include "../page/menu/menu_surat/surat/accept.php";
}
if($_GET['page']=="accept2"){
    include "../page/menu/menu_surat/surat/accept2.php";
}
if($_GET['page']=="accept3"){
    include "../page/menu/menu_surat/surat/accept3.php";
}
if($_GET['page']=="accept4"){
    include "../page/menu/menu_surat/surat/accept4.php";
}
if($_GET['page']=="accept5"){
    include "../page/menu/menu_surat/surat/accept5.php";
}
if($_GET['page']=="tanda"){
    include "../page/menu/menu_surat/surat/tanda.php";
}
if($_GET['page']=="ctanda"){
    include "../page/menu/menu_surat/surat/ctanda.php";
}
if($_GET['page']=="create_surat"){
    include "../page/menu/menu_surat/surat/create_surat.php";
}
if($_GET['page']=="edit_surat"){
    include "../page/menu/menu_surat/surat/edit_surat.php";
}

if($_GET['page']=="create_catatan"){
    include "../page/menu/menu_surat/surat/create_catatan.php";
}

if($_GET['page']=="create_emailsurat"){
    include "../page/menu/menu_surat/surat/create_emailsurat.php";
}


// PAGE hukum

if($_GET['page']=="hukum"){
    include "../page/menu/menu_surat/hukum/hukum.php";
}
if($_GET['page']=="create_hkm"){
    include "../page/menu/menu_surat/hukum/create_hkm.php";
}
if($_GET['page']=="edit_hkm"){
    include "../page/menu/menu_surat/hukum/edit_hkm.php";
}

// PAGE PUBLIKASI

if($_GET['page']=="pub"){
    include "../page/menu/menu_surat/publikasi/pub.php";
}
if($_GET['page']=="create_pub"){
    include "../page/menu/menu_surat/publikasi/create_pub.php";
}
if($_GET['page']=="edit_pub"){
    include "../page/menu/menu_surat/publikasi/edit_pub.php";
}
if($_GET['page']=="create_emailpub"){
    include "../page/menu/menu_surat/publikasi/create_emailpub.php";
}

// PAGE TINDAK LANJUT

if($_GET['page']=="tindak"){
    include "../page/menu/menu_surat/tindak_lanjut/tindak.php";
}
if($_GET['page']=="create"){
    include "../page/menu/menu_surat/tindak_lanjut/create.php";
}
if($_GET['page']=="edit_tindak"){
    include "../page/menu/menu_surat/tindak_lanjut/edit_tindak.php";
}

// PAGE PSDIREKSI

if($_GET['page']=="pdir"){
    include "../page/menu/menu_corp/psdir/pdir.php";
}if($_GET['page']=="cpdir"){
    include "../page/menu/menu_corp/psdir/cpdir.php";
}if($_GET['page']=="edir"){
    include "../page/menu/menu_corp/psdir/edir.php";
}


// PAGE PS

if($_GET['page']=="ps"){
    include "../page/menu/menu_corp/ps/ps.php";
}if($_GET['page']=="create_ps"){
    include "../page/menu/menu_corp/ps/create_ps.php";
}
if($_GET['page']=="edit_ps"){
    include "../page/menu/menu_corp/ps/edit_ps.php";
}
if($_GET['page']=="pswm"){
    include "../page/menu/menu_corp/ps/pswm.php";
}
if($_GET['page']=="create_pswm"){
    include "../page/menu/menu_corp/ps/create_pswm.php";
}
if($_GET['page']=="edit_pswm"){
    include "../page/menu/menu_corp/ps/edit_pswm.php";
}

// PAGE Pengurus

if($_GET['page']=="peng"){
    include "../page/menu/menu_corp/pengurus/peng.php";
}
if($_GET['page']=="cpeng"){
    include "../page/menu/menu_corp/pengurus/cpeng.php";
}
if($_GET['page']=="epeng"){
    include "../page/menu/menu_corp/pengurus/epeng.php";
}
if($_GET['page']=="peng_kel"){
    include "../page/menu/menu_corp/pengurus/peng_kel.php";
}
if($_GET['page']=="peng_hub"){
    include "../page/menu/menu_corp/pengurus/peng_hub.php";
}

// PAGE PENGURUS EKSEKUTIF

if($_GET['page']=="pe"){
    include "../page/menu/menu_corp/pe/pe.php";
}
if($_GET['page']=="create_pe"){
    include "../page/menu/menu_corp/pe/create_pe.php";
}
if($_GET['page']=="epe"){
    include "../page/menu/menu_corp/pe/epe.php";
}

// PAGE SK INTERN

if($_GET['page']=="sk"){
    include "../page/menu/menu_intern/sk/sk.php";
}
if($_GET['page']=="csk"){
    include "../page/menu/menu_intern/sk/csk.php";
}
if($_GET['page']=="csk1"){
    include "../page/menu/menu_intern/sk/csk1.php";
}
if($_GET['page']=="csk2"){
    include "../page/menu/menu_intern/sk/csk2.php";
}
if($_GET['page']=="esk"){
    include "../page/menu/menu_intern/sk/esk.php";
}
if($_GET['page']=="create_emailsk"){
    include "../page/menu/menu_intern/sk/create_emailsk.php";
}

// PAGE SE INTERN

if($_GET['page']=="se"){
    include "../page/menu/menu_intern/se/se.php";
}
if($_GET['page']=="cse"){
    include "../page/menu/menu_intern/se/cse.php";
}
if($_GET['page']=="cse1"){
    include "../page/menu/menu_intern/se/cse1.php";
}
if($_GET['page']=="cse2"){
    include "../page/menu/menu_intern/se/cse2.php";
}
if($_GET['page']=="ese"){
    include "../page/menu/menu_intern/se/ese.php";
}
if($_GET['page']=="get_nose"){
    include "../page/menu/menu_intern/se/get_nose.php";
}
if($_GET['page']=="create_emailse"){
    include "../page/menu/menu_intern/se/create_emailse.php";
}

// PAGE MEMO INTERN

if($_GET['page']=="memo"){
    include "../page/menu/menu_intern/memo/memo.php";
}
if($_GET['page']=="cmem"){
    include "../page/menu/menu_intern/memo/cmem.php";
}
if($_GET['page']=="cmem1"){
    include "../page/menu/menu_intern/memo/cmem1.php";
}
if($_GET['page']=="cmem2"){
    include "../page/menu/menu_intern/memo/cmem2.php";
}
if($_GET['page']=="emem"){
    include "../page/menu/menu_intern/memo/emem.php";
}
if($_GET['page']=="get_nomem"){
    include "../page/menu/menu_intern/memo/get_nomem.php";
}
if($_GET['page']=="create_emailmemo"){
    include "../page/menu/menu_intern/memo/create_emailmemo.php";
}


// PAGE NOTULEN

if($_GET['page']=="notulen"){
    include "../page/menu/menu_notulen/notulen/notulen.php";
}
if($_GET['page']=="notulen_dir"){
    include "../page/menu/menu_notulen/notulen/notulen_dir.php";
}
if($_GET['page']=="not_has"){
    include "../page/menu/menu_notulen/notulen/not_has.php";
}
if($_GET['page']=="absen"){
    include "../page/menu/menu_notulen/notulen/absen.php";
}
if($_GET['page']=="page_absen"){
    include "../page/menu/menu_notulen/notulen/page_absen.php";
}
if($_GET['page']=="absen2"){
    include "../page/menu/menu_notulen/notulen/absen2.php";
}
if($_GET['page']=="try"){
    include "../page/menu/menu_notulen/notulen/try.php";
}

if($_GET['page']=="not_dir"){
    include "../page/menu/menu_notulen/notulen_direksi/not_dir.php";
}
if($_GET['page']=="cnotdir"){
    include "../page/menu/menu_notulen/notulen_direksi/cnotdir.php";
}
if($_GET['page']=="edirnot"){
    include "../page/menu/menu_notulen/notulen_direksi/edirnot.php";
}

if($_GET['page']=="not_dekom"){
    include "../page/menu/menu_notulen/notulen_dekom/not_dekom.php";
}
if($_GET['page']=="cnot"){
    include "../page/menu/menu_notulen/notulen_dekom/cnot.php";
}
if($_GET['page']=="edekom"){
    include "../page/menu/menu_notulen/notulen_dekom/edekom.php";
}

// NOTULEN DEWAN KOMISARIS
if($_GET['page']=="not_haskom"){
    include "../page/menu/menu_notulen/not_hasil/not_haskom.php";
}
if($_GET['page']=="cnothas"){
    include "../page/menu/menu_notulen/not_hasil/cnothas.php";
}
if($_GET['page']=="create_emailhas"){
    include "../page/menu/menu_notulen/not_hasil/create_emailhas.php";
}


// PAGE SIAK

if($_GET['page']=="siak"){
    include "../page/menu/menu_siak/siak.php";
}
if($_GET['page']=="siak2"){
    include "../page/menu/menu_siak/siak2.php";
}
if($_GET['page']=="create_siak"){
    include "../page/menu/menu_siak/create_siak.php";
}
if($_GET['page']=="edit_surat"){
    include "../page/menu/menu_siak/edit_siak.php";
}



// PAGE SIAK

if($_GET['page']=="umum"){
    include "../page/menu/menu_umum/umum.php";
}
if($_GET['page']=="umum2"){
    include "../page/menu/menu_umum/umum2.php";
}
if($_GET['page']=="cumum"){
    include "../page/menu/menu_umum/cumum.php";
}
if($_GET['page']=="edit_umum"){
    include "../page/menu/menu_siak/edit_umum.php";
}

// PAGE SIAK

if($_GET['page']=="user"){
    include "../page/menu/menu_user/user.php";
}
if($_GET['page']=="cuser"){
    include "../page/menu/menu_user/cuser.php";
}


if($_GET['page']=="user2"){
    include "../page/menu/menu_user2/user2.php";
}
if($_GET['page']=="cuser"){
    include "../page/menu/menu_user2/cuser2.php";
}

if($_GET['sekar']=="page_absen"){
    include "../sekar/page_absen.php";
}


?>