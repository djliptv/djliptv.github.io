<?php  
    $file = file_get_contents("https://www.dropbox.com/scl/fi/gapth6pp4jn6o6jd9bote/mi-tele.m3u?rlkey=923ydm8fb97pgzi6qrow52cz8&dl=1"); // MI TELE
	$file .= file_get_contents("https://www.dropbox.com/scl/fi/tf7h8aov83rxsb7aqqv2r/canales-independientes.m3u?rlkey=95mbgzcomever5mg2amlqg07z&dl=1"); // CANALES INDEPENDIENTES
	$file .= file_get_contents("https://www.dropbox.com/scl/fi/n2cla1eu82nqcids475sc/xtrematv.m3u?rlkey=2nwsdwnv29wiu4ry1xypdh0cx&dl=1"); // XTREMA TV
	$file .= file_get_contents("https://www.dropbox.com/scl/fi/hrzwn2qn75os0zktvfz62/cable.m3u?rlkey=kyd3kmiykztxsgxw30zmzw2bg&dl=1"); // CABLE
	$file .= file_get_contents("https://www.dropbox.com/s/00l86csaus2atzb/TvDJLIPTV.m3u?dl=1"); // DJLIPTV
	$file .= file_get_contents("https://www.dropbox.com/scl/fi/h9298jl49vpk94kl0ja7l/argentina-tda.m3u?rlkey=nz3giqus6z58pmou552t7hyqm&dl=1"); // ARGENTINA TDA
	$file .= file_get_contents("https://www.dropbox.com/scl/fi/62ctaj4j9fs1nhpr2q0k9/argentina-iptv.m3u?rlkey=e8crp6l50wsppkx7wqasawryi&dl=1"); // ARGENTINA IPTV
	$file .= file_get_contents("https://www.dropbox.com/scl/fi/mvxr0p1h602e73emc81aa/deportes.m3u?rlkey=exqlvzhsam3j30t76lly4lpfb&dl=1"); // DEPORTES
	$file .= file_get_contents("https://www.dropbox.com/s/rhqdq2zrhue3h55/canelatv.m3u?dl=1"); // CANELA TV
	$file .= file_get_contents("https://www.dropbox.com/s/xp7rvvog2ai8p70/vix.m3u?dl=1"); // VIX
	$file .= file_get_contents("https://www.dropbox.com/scl/fi/tzabtuh90gtrjgrw4x7s4/musica.m3u?rlkey=611xphxme5zxonmqhrvsiulf9&dl=1"); // MUSICA
	$file .= file_get_contents("https://www.dropbox.com/scl/fi/gz1t9u70z51uyebltftya/chile.m3u?rlkey=wndeynyq4j4zdt1254gpcuwz1&dl=1"); // CHILE
	$file .= file_get_contents("https://www.dropbox.com/scl/fi/nss4bc0ayuxv4gx0fdzsn/spain.m3u?rlkey=74xwnikc4i4dop60oedug6kob&dl=1"); // SPAIN
	$file .= file_get_contents("https://www.dropbox.com/scl/fi/b47k37azfaqqlybiowutc/spain-iptv.m3u?rlkey=sd1ik345mk583f3p2ojk07q7n&dl=1"); // SPAIN IPTV
	$file .= file_get_contents("https://www.dropbox.com/scl/fi/w1qep1eymplx81huce6pb/peliculas-infantiles.m3u?rlkey=46qooxbc1o5neyd19znnrfrdd&dl=1"); // PELIS INFANTILES
	$file .= file_get_contents("https://www.dropbox.com/scl/fi/els5nszzocy4hvnshoyt3/peliculas.m3u?rlkey=w6iw93ml5y83dab5iyykyyglf&dl=1"); // PELICULAS
	$file .= file_get_contents("https://www.dropbox.com/scl/fi/l6z1uae3ygcdhrdl570g0/series.m3u?rlkey=56q6zoya4gkjvnl681lr0uchh&dl=1"); // SERIES
	
	file_put_contents("1.m3u", $file);
    header("Location:  https://raw.githubusercontent.com/djliptv/djliptv.github.io/main/iptv/1.m3u", true, 307);
?>