<?php
public function tcKimlikDogrulama()
	{
		$client = new SoapClient("https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL"); // Soap bağlantımızı yapıyoruz.
		
		
		
		$data = $client->TCKimlikNoDogrula([
			'TCKimlikNo' => '12312312313',
			'Ad' => "NEFER" , /// eğer iki isim var ise arasında bir boşluk bırakarak yazın.
			'Soyad' => "DEV",
			'DogumYili' => "2021"
		]);

		$sonuc =  $data->TCKimlikNoDogrulaResult;
		  print_r($sonuc); //// Sonuç başarılı ise true döner.
		  die();
		  
		  


		}
