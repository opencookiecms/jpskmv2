<?php

error_reporting( ~E_NOTICE );
require_once '../Connections/dataconnenction.php';

if(isset($_POST['konsave']))
{
	$knName = $_POST['konNama'];
	
	$knImgFile  = $_FILES['koonImage']['name'];
	$knImg_dir  = $_FILES['koonImage']['tmp_name'];
	$knImgSize  = $_FILES['koonImage']['size'];
	
	$knAlamat 		= $_POST['KoonAlamat'];
	$knAlamatexts 	= $_POST['KoonAlamatexts'];
	$knAlamatextd 	= $_POST['KoonAlamatextd'];
	$knPoskod 		= $_POST['koonPoskod'];
	$knBandar 		= $_POST['koonBandar'];
	$knDaerah 		= $_POST['koonDaerah'];
	$knNegeri 		= $_POST['koonNegeri'];
	$knTel	  		= $_POST['koonTelPej'];
	
	$knPengurus 	= $_POST['koonPengurus'];
	$knNoKpPeg 		= $_POST['koonKPPen'];
	$knNoTelPeg 	= $_POST['koonTelPengurus'];
	
	$knRkSatu 		= $_POST['koonRKsatu'];
	$knRkNoKpSatu 	= $_POST['konRKKPsatu'];
	$knRkNoTelSatu 	= $_POST['koonKPTelsatu'];
	
	$knRkDua 		= $_POST['koonRKdua'];
	$knRkNoKpDua 	= $_POST['koonRKKPdua'];
	$knRkNoTelDua 	= $_POST['koonRKTeldua'];
	
	$knRkTiga 		= $_POST['koonRKtiga'];
	$knRkNoKpTiga 	= $_POST['koonRKKPtiga'];
	$knRkNoTelTiga	= $_POST['koonRKTeltiga'];
	
	$knRkEmpat 		= $_POST['koonRKempat'];
	$knRkNoKpEmpat 	= $_POST['koonRKKPempat'];
	$knRkNoTelEmpat = $_POST['koonRKTelempat'];
	
	$knEmail 		= $_POST['koonrknemail'];
	$knFax 			= $_POST['koonfax'];
	$knBank 		= $_POST['koonBank'];
	$knAKBank 		= $_POST['koonAkaunBank'];
	$knKawOper 		= $_POST['koonOperasi'];
	$knStatus	  	= $_POST['koonStatus'];
	$knPrestasi	    = $_POST['koonPrestasi'];
	
	
	
	
	
	//statuspendaftaran
	
		
	$spStatPendaftarans   	= $_POST['daftarstatus'];
    $spNoSiris				= $_POST['daftarsiri'];
	$spPBaharus				= $_POST['inlineRadioOptions'];
	$spPembaharuans			= $_POST['inlineRadioOptions1'];
	$spLainLains 			= $_POST['daftarlainlain'];
	$spKategoris			= $_POST['daftarkategory'];
	$spDateMohons 			= $_POST['daftarMohon'];
	$spCajs					= $_POST['daftarCas'];
	$spNoResits				= $_POST['daftarResit'];
	$spNoSijils				= $_POST['daftarSijilNo'];
	$spDateKeluars			= $_POST['daftarKeluarkan'];
	$spDateTamats 			= $_POST['daftarTamat'];
	$spDisemaks				= $_POST['daftardisemak'];
	$spJwtnPenyemaks		= $_POST['daftarjawatanSemak'];
	$spDisahs				= $_POST['daftardisahkan'];
	$spJwtnSahs 			= $_POST['daftarjawatanUrus'];
	$spLuluss				= $_POST['daftardiluluskan'];
	$spJwtnLuluss			= $_POST['daftarjawatanLulus'];
	$spStatusSijils 		= $_POST['daftarstatussijil'];
												
	
	
	//statuspendaftaran tamat
	//sijil
	$FsijilNoPendaftaran	= $_POST['sijilNoDaftarPPK'];	
	$FsijilSah				= $_POST['sijilSahPPK'];
	$FsijilTamat			= $_POST['sijilHinggaPPK'];
	$FsijilPPKGredOne		= $_POST['sijilGredOnePPK'];
	$FsijilPPKCatOne		= $_POST['sijilGredKatOnePPK'];
	$FsijilPPKKhuOne		= $_POST['sijilGredKhususOnePPK'];
	$FsijilPPKGredTwo		= $_POST['sijilGredTwoPPK'];
	$FsijilPPKCatTwo		= $_POST['sijilGredKatTwoPPK'];
	$FsijilPPKKhuTwo		= $_POST['sijilGredKhususTwoPPK'];
	$FsijilPPKGredThree		= $_POST['sijilGredThreePPK'];
	$FsijilPPKCatThree		= $_POST['sijilGredKatThreePPK'];
	$FsijilPPKKhuThree		= $_POST['sijilGredKhususThreePPK'];
	$FsijilSPKKNo			= $_POST['sijilNoDaftarSPKK'];
	$FsijilSPKKsah			= $_POST['sijilSahSPKK'];
	$FsijilSPKKTamat		= $_POST['sijilHinggaSPKK'];
	$FsijilSPPKGredOne 		= $_POST['sijilGredOneSPKK'];
	$FsijilSPPKCatOne		= $_POST['sijilGredKatOneSPKK'];
	$FsijilSPPKKhuOne		= $_POST['sijilGredKhususOneSPKK'];
	$FsijilSPPKGredTwo		= $_POST['sijilGredTwoSPKK'];
	$FsijilSPPKCatTwo		= $_POST['sijilGredKatTwoSPKK'];
	$FsijilSPPKKhuTwo		= $_POST['sijilGredKhususTwoSPKK'];
	$FsijilSPPKGredThree	= $_POST['sijilGredThreeSPKK'];
	$FsijilSPPKCatThree		= $_POST['sijilGredKatThreeSPKK'];
	$FsijilSPPKKhuThree		= $_POST['sijilGredKhususThreeSPKK'];
	$FsijiSTBNo				= $_POST['sijilNoDaftarSTB'];
	$FsijilSTBSah			= $_POST['sijilSahSTB'];
	$FsijilSTBTamat			= $_POST['sijilHinggaSTB'];
	$FsijilSTBGred 			= $_POST['sijilGredSTB'];
	$FsijilJPSNo			= $_POST['sijilNoDaftarJPS'];
	$FsijilJPSSah			= $_POST['sijilSahJPS'];
	$FsijilJPSTamat			= $_POST['sijilHinggaJPS'];
	$FsijilJPSKate			= $_POST['sijilKATJPS'];
	//sijil tamat
	
	if(empty($knName))
	{
		$msgError = "Sila masukkan nama syarikat.";
	}
	else if(empty($knAlamat))
	{
		$msgError = "Sila masukan alamat syarikat";
	}
	else
	{
		$upload_img_dir = '../assets/images/userimage';
		$imgExt = strtolower(pathinfo($knImgFile,PATHINFO_EXTENSION));
		$valid_img_ext = array ('jpeg', 'jpg', 'png', 'gif');
		$userimage = rand(1000,1000000).".".$imgExt;
		
		if(in_array($imgExt,$valid_img_ext))
		{
			//check file size
			if($knImgSize <7000000)
			{
				move_uploaded_file($knImg_dir,$upload_img_dir.$userimage);
			}
			else
			{
				$msgError = "Maaf, Fail gambar ini sudah melebihi had limit yang telah ditetapkan";
			}
			
		}
		else
		{
			$msgError = "Maaf hanya JPG, JPEG, PNG & GIF sahaja dibenarkan";
		}
	}
	
	if(!isset($msgError))
	{
$stmt = $DB_con->prepare('INSERT INTO kontraktor(
												konName,
												konImage,
												KonAlamat,
												konAlamatExtS,
												konAlamatExtD,
												konPoskod,
												konBandar,
												konDaerah,
												konNegeri,
												konTel,
												konPengurus,
												NoKPpengurus,
												NoTelPengurus,
												RKsatu,
												RKsatuNokp,
												RKsatuNotel,
												RKdua,
												RKduaNokp,
												RKduaNotel,
												RKtiga,
												RKtigaNokp,
												RKtigaNotel,
												RKempat,
												RKempatNokp,
												RKempatNotel,
												konEmail,
												koFax,
												konBank,
												konAkaunBank,
												konKawOperasi,
												KonStatus,
												konPrestasi, 
												spStatusPendaftaran, 
												spNoSiri, 
												spPBaharu, 
												spPembaharuan, 
												spLainLain, 
												spKategori, 
												spDateMohon, 
												spCaj, 
												spNoResit,
												spNoSijil, 
												spDateKeluar, 
												spDateTamat, 
												spDisemak, 
												spJwtnPenyemak, 
												spDisah, 
												spJwtnSah, 
												spLulus, 
												spJwtnLulus, 
												spStatusSijil,
												sijilNoPendaftaran,
												sijilSah,
												sijilTamat,
												sijilPPKGredOne,
												sijilPPKCatOne,
												sijilPPKKhuOne,
												sijilPPKGredTwo,
												sijilPPKCatTwo,
											    sijilPPKKhuTwo, 
												sijilPPKGredThree,
												sijilPPKCatThree,
												sijilPPKKhuThree, 
												sijilSPKKNo,
												sijilSPKKsah,
												sijilSPKKTamat, 
												sijilSPPKGredOne, 
												sijilSPPKCatOne, 
												sijilSPPKKhuOne,
												sijilSPPKGredTwo,
												sijilSPPKCatTwo, 
												sijilSPPKKhuTwo,
												sijilSPPKGredThree,
												sijilSPPKCatThree,
												sijilSPPKKhuThree,
												sijiSTBNo,
												sijilSTBSah, 
												sijilSTBTamat, 
												sijilSTBGred, 
												sijilJPSNo,
												sijilJPSSah, 
												sijilJPSTamat,
												sijilJPSKate) 
																				VALUES (				
																						:kName,
																						:kPic,
																						:kAlamat,
																						:kAlamatexts,
																						:kAlamatextd,	
																						:kPoskod,
																						:kBandar,
																						:kDaerah,
																						:kNegeri,
																						:kTel,
																						:kPengurus,
																						:kNoKpPen,
																						:kNoTelPen,
																						:kRKsatu,
																						:kRKsatuNoKp,
																						:kRKsatuNoTel,
																						:kRKdua,
																						:kRKduaNoKp,
																						:kRKduaNoTel,
																						:kRKtiga,	
																						:kRKtigaNoKp,
																						:kRKtigaNoTel,
																						:kRKempat,
																						:kRKempatNoKp,
																						:kRKempatNoTel,
																						:krEmail,
																						:kFax,
																						:kBank,	
																						:kAKBank,
																						:kKawOpe,
																						:kStatus,
																						:kPrestasi,
																						:spStatusPendaftarant, 
																						:spNoSirit, 
																						:spPBaharut, 
																						:spPembaharuant, 
																						:spLainLaint, 
																						:spKategorit, 
																						:spDateMohont, 
																						:spCajt, 
																						:spNoResitt,
																						:spNoSijilt, 
																						:spDateKeluart, 
																						:spDateTamatt, 
																						:spDisemakt, 
																						:spJwtnPenyemakt, 
																						:spDisaht, 
																						:spJwtnSaht, 
																						:spLulust, 
																						:spJwtnLulust, 
																						:spStatusSijilt,
																						:sijilNoPendaftaranU,
																						:sijilSahU,
																						:sijilTamatU,
																						:sijilPPKGredOneU,
																						:sijilPPKCatOneU,
																						:sijilPPKKhuOneU,
																						:sijilPPKGredTwoU,
																						:sijilPPKCatTwoU,
																						:sijilPPKKhuTwoU,
																						:sijilPPKGredThreeU,
																						:sijilPPKCatThreeU,
																						:sijilPPKKhuThreeU,
																						:sijilSPKKNoU,
																						:sijilSPKKsahU,
																						:sijilSPKKTamatU,
																						:sijilSPPKGredOneU,
																						:sijilSPPKCatOneU,
																						:sijilSPPKKhuOneU,
																						:sijilSPPKGredTwoU,
																						:sijilSPPKCatTwoU,
																						:sijilSPPKKhuTwoU,
																						:sijilSPPKGredThreeU,
																						:sijilSPPKCatThreeU,
																						:sijilSPPKKhuThreeU,
																						:sijiSTBNoU,
																						:sijilSTBSahU,
																						:sijilSTBTamatU, 
																						:sijilSTBGredU, 
																						:sijilJPSNoU,
																						:sijilJPSSahU,
																						:sijilJPSTamatU,
																						:sijilJPSKateU)');     
																															
															
															
		 $stmt->bindParam(':kName',$knName);
		 $stmt->bindParam(':kPic'	,$userimage);
		 $stmt->bindParam(':kAlamat',$knAlamat);
		 $stmt->bindParam(':kAlamatexts',$knAlamatexts);
		 $stmt->bindParam(':kAlamatextd',$knAlamatextd);
		 $stmt->bindParam(':kPoskod',$knPoskod);
		 $stmt->bindParam(':kBandar',$knBandar);
		 $stmt->bindParam(':kDaerah', $knDaerah);
		 $stmt->bindParam(':kNegeri',$knNegeri);
		 $stmt->bindParam(':kTel',$knTel);
		 $stmt->bindParam(':kPengurus',$knPengurus);
		 $stmt->bindParam(':kNoKpPen',$knNoKpPeg);
		 $stmt->bindParam(':kNoTelPen',$knNoTelPeg);
		 $stmt->bindParam(':kRKsatu',$knRkSatu);
		 $stmt->bindParam(':kRKsatuNoKp',$knRkNoKpSatu);
		 $stmt->bindParam(':kRKsatuNoTel',$knRkNoTelSatu);
		 $stmt->bindParam(':kRKdua',$knRkDua);
		 $stmt->bindParam(':kRKduaNoKp',$knRkNoKpDua);
		 $stmt->bindParam(':kRKduaNoTel',$knRkNoTelDua);
		 $stmt->bindParam(':kRKtiga',$knRkTiga);
		 $stmt->bindParam(':kRKtigaNoKp',$knRkNoKpTiga);
		 $stmt->bindParam(':kRKtigaNoTel',$knRkNoTelTiga);
		 $stmt->bindParam(':kRKempat',$knRkEmpat);
		 $stmt->bindParam(':kRKempatNoKp',$knRkNoKpEmpat);
		 $stmt->bindParam(':kRKempatNoTel',$knRkNoTelEmpat);
		 $stmt->bindParam(':krEmail',$knEmail);
		 $stmt->bindParam(':kFax',$knFax);
		 $stmt->bindParam(':kBank',$knBank);
		 $stmt->bindParam(':kAKBank',$knAKBank);
		 $stmt->bindParam(':kKawOpe',$knKawOper);
		 $stmt->bindParam(':kStatus',$knStatus);
		 $stmt->bindParam(':kPrestasi',$knPrestasi);
		 
		  //statment for status pendaftaran
		 
		 $stmt->bindParam(':spStatusPendaftarant'	,$spStatPendaftarans);
		 $stmt->bindParam(':spNoSirit'	,  $spNoSiris);
		 $stmt->bindParam(':spPBaharut'	, $spPBaharus);
		 $stmt->bindParam(':spPembaharuant'	, $spPembaharuans);
		 $stmt->bindParam(':spLainLaint'	, $spLainLains );
		 $stmt->bindParam(':spKategorit'	, $spKategoris);
		 $stmt->bindParam(':spDateMohont'	, $spDateMohons);
		 $stmt->bindParam(':spCajt'	, $spCajs);
		 $stmt->bindParam(':spNoResitt'	, $spNoResits);
		 $stmt->bindParam(':spNoSijilt'	, $spNoSijils);
		 $stmt->bindParam(':spDateKeluart'	, $spDateKeluars	);
		 $stmt->bindParam(':spDateTamatt	', $spDateTamats );
		 $stmt->bindParam(':spDisemakt'	, $spDisemaks	);
		 $stmt->bindParam(':spJwtnPenyemakt'	, $spJwtnPenyemaks);
		 $stmt->bindParam(':spDisaht'	, $spDisahs);
		 $stmt->bindParam(':spJwtnSaht'	, $spJwtnSahs );
		 $stmt->bindParam(':spLulust'	, $spLuluss);
		 $stmt->bindParam(':spJwtnLulust'	, $spJwtnLuluss);
		 $stmt->bindParam(':spStatusSijilt'	, $spStatusSijils );
		 
		 //statement untuk sijil terlalu banyak fail database
		 
		 $stmt->bindParam(':sijilNoPendaftaranU',$FsijilNoPendaftaran);
		 $stmt->bindParam(':sijilSahU',$FsijilSah );
		 $stmt->bindParam(':sijilTamatU', $FsijilTamat);
		 $stmt->bindParam(':sijilPPKGredOneU',$FsijilPPKGredOne);
		 $stmt->bindParam(':sijilPPKCatOneU',$FsijilPPKCatOne);
		 $stmt->bindParam(':sijilPPKKhuOneU',$FsijilPPKKhuOne);
		 $stmt->bindParam(':sijilPPKGredTwoU', $FsijilPPKGredTwo);
		 $stmt->bindParam(':sijilPPKCatTwoU',$FsijilPPKCatTwo);
		 $stmt->bindParam(':sijilPPKKhuTwoU'	, $FsijilPPKKhuTwo);
		 $stmt->bindParam(':sijilPPKGredThreeU'	, $FsijilPPKGredThree);
		 $stmt->bindParam(':sijilPPKCatThreeU'	, $FsijilPPKCatThree);
		 $stmt->bindParam(':sijilPPKKhuThreeU'	, $FsijilPPKKhuThree);
		 $stmt->bindParam(':sijilSPKKNoU'	, $FsijilSPKKNo);
		 $stmt->bindParam(':sijilSPKKsahU'	,  $FsijilSPKKsah);
		 $stmt->bindParam(':sijilSPKKTamatU'	, $FsijilSPKKTamat );
		 $stmt->bindParam(':sijilSPPKGredOneU'	, $FsijilSPPKGredOne   );
		 $stmt->bindParam(':sijilSPPKCatOneU'	, $FsijilSPPKCatOne  );
		 $stmt->bindParam(':sijilSPPKKhuOneU'	, $FsijilSPPKKhuOne  );
		 $stmt->bindParam(':sijilSPPKGredTwoU'	, $FsijilSPPKGredTwo  );
		 $stmt->bindParam(':sijilSPPKCatTwoU'	,  $FsijilSPPKCatTwo );
		 $stmt->bindParam(':sijilSPPKKhuTwoU'	,  $FsijilSPPKKhuTwo );
		 $stmt->bindParam(':sijilSPPKGredThreeU'	, $FsijilSPPKGredThree  );
		 $stmt->bindParam(':sijilSPPKCatThreeU'	,  $FsijilSPPKCatThree );
		 $stmt->bindParam(':sijilSPPKKhuThreeU'	, $FsijilSPPKKhuThree );
		 $stmt->bindParam(':sijiSTBNoU'		, $FsijiSTBNo	  );
		 $stmt->bindParam(':sijilSTBSahU'	, $FsijilSTBSah  );
		 $stmt->bindParam(':sijilSTBTamatU'	, $FsijilSTBTamat  );
		 $stmt->bindParam(':sijilSTBGredU'	, $FsijilSTBGred   );
		 $stmt->bindParam(':sijilJPSNoU'	,  $FsijilJPSNo );
		 $stmt->bindParam(':sijilJPSSahU'	, $FsijilJPSSah  );
		 $stmt->bindParam(':sijilJPSTamatU'	, $FsijilJPSTamat  );
		 $stmt->bindParam(':sijilJPSKateU'	, $FsijilJPSKate  );
		
		 
	
		
		if( $stmt->execute())
		{
			$msgSuccess = "Rekod barjaya ditambah";
			header("refresh:2;kontraktorview.php"); // redirects image view page after 5 seconds.
			
		}
		else
		{
			$msgError = "Rekod tidak berjaya dimasukan";
		}
		
	}
	
	
	
}
?>



