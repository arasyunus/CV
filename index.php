<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Yunus ARAS Web Page</title>
		<meta name="description" content="Yunus ARAS, Software, Developer" />
		<meta name="keywords" content="Yunus ARAS" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>



<?php
	if (isset($_POST["sendMessage"])) {
		$is_mail = FALSE;
		$json_string = file_get_contents("messages.json");
		$parsed_json = json_decode($json_string);

		for ($i=0; $i < count($parsed_json); $i++) {
			if ($_POST["email"] == $parsed_json[$i]->email) {
				$is_mail = TRUE;
			}
		}

		if (!$is_mail) {
			$newMessage = array(
				'name' => $_POST['name'],
				'email' => $_POST['email'],
				'message' => $_POST['message'],
			);
			array_push($parsed_json, $newMessage);

			$handle = fopen("messages.json", "w");
			$fw = fwrite($handle, json_encode($parsed_json));
			fclose($handle);
			if($handle AND $fw){
				$is_fw = TRUE;
			}else{
				unset($is_fw);
			}
		}

		if (isset($is_fw) AND !$is_mail) {
			echo "<div class='flash correct'>Mesajınız Gönderildi...</div>";
		}else{
			echo "<div class='flash wrong'>Mesajınız Gönderilemedi...</div>";
		}
		//<div class='flash wrong'>Mesajınız Gönderilemedi...</div>
	}
?>

		<div class="container">	
			<div id="bl-main" class="bl-main">
				<section>
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-about">About</h2>
					</div>
					<div class="bl-content">
						<div class="figure">
							<div class="figcaption">Software Developer</div>
							<img src="images/yns.jpg" alt="Yunus ARAS">
						</div>
						<h2>Yunus ARAS</h2>
						<p>Kocaeli'nin Gebze ilçesinde 1992 yılında doğdum. Lise öğrenimimi Gebze'de Teknik Lise Bilgisayar Bölümü Web Programcılığı alanında iyi dereceyle tamamladım. Lise stajımı Nova Reklamcılık isimli şirketin Bilgi işlem departmanında yaptım. 2011 yılında Hacettepe Üniversitesi Bilgisayar ve Öğretim Teknolojileri Eğitimi Bölümünü kazanarak Ankara’ya geldim. Fakülte dersleri dışında yazılım geliştirme ve programlama dilleri konusunda kendimi geliştirdim. Yazılım geliştirme konusunda yetenekli, istekli ve gelişmelere açığım. Öğrenmeyi, öğretmeyi ve bu alanda üretici faaliyetlerde bulunmayı seviyorum. Yazılım konusunda yenilikleri takip ederim ve kendimi bu alanda kanıtlamak istiyorum. Özellikle web programcılığı konusunda iyi derecede uygulama geliştirebilirim. Masaüstü, mobil, cross-platform app, web services ve hibrit mobil uygulama geliştirme konusunda bilgi sahibiyim ve kendimi geliştirmeye yönelik araştırmalar yapıyorum. Alanımdaki gelişmeleri takip edebilecek ve araştırma yapabilecek derecede teknik İngilizce bilgisine sahibim. Üniversite 3. Yılında Hacettepe Üniversitesi Teknokentte TTnet ortaklığıyla yürütülen TTnet Vitamin uygulamalarının geliştirilmesinde yaklaşık bir ay çalıştım fakat derslerin ve sınavların yoğunluğundan dolayı bırakmak zorunda kaldım. Üniversiteyi 3. lük derecesiyle bitirerek mezun oldum. Şu an Emniyet Genel Müdürlüğü'nde başkomiser yardımcısı rütbesiyle görev yapmaktayım.</p>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section id="bl-work-section">
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-works">My Works</h2>
					</div>
					<div class="bl-content">
						<h2>My Works</h2>
						<p>My Web Projects, DB Projects, Mobile Development and Desktop Application Projects</p>

						<ul id="bl-work-items">
							<li data-panel="panel-1"><a class="lia" href="#"><img src="images/BittiBitiyor.png" /></a></li>
							<li data-panel="panel-2"><a class="lia" href="#"><img src="images/DeneySS.png" /></a></li>
							<li data-panel="panel-3"><a class="lia" href="#"><img src="images/hacep.png" /></a></li>
							<li data-panel="panel-4"><a class="lia" href="#"><img src="images/OgrenciEvleri.png" /></a></li>
							<li data-panel="panel-5"><a class="lia" href="#"><img src="images/uploaderplugin.png" /></a></li>
							<li data-panel="panel-6"><a class="lia" href="#"><img src="images/oys.png" /></a></li>
						</ul>

					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section>
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-blog">My Courses</h2>
					</div>
					<div class="bl-content">

						<h2>My Courses</h2>

						<ul class="courses">


						<h1>PHP Courses</h1>
							<li><a href="https://code.tutsplus.com/courses/php-fundamentals">Tutsplus - PHP Fundamentals</a></li>
							<li><a href="https://www.lynda.com/CodeIgniter-tutorials/Learn-CodeIgniter-3-Basics/505770-2.html">Lynda - Learn CodeIgniter 3: The Basics</a></li>
							<li><a href="https://www.lynda.com/PHP-tutorials/Design-Patterns-PHP/186870-2.html">Lynda - Design Patterns in PHP</a></li>
							<li><a href="https://www.lynda.com/PHP-tutorials/Accessing-Databases-Object-Oriented-PHP/169106-2.html">Lynda - Accessing Databases with Object-Oriented PHP</a></li>
							<li><a href="https://www.lynda.com/PHP-tutorials/Object-Oriented-Programming-PHP/107953-2.html">Lynda - Object-Oriented Programming with PHP</a></li>
							<li><a href="https://code.tutsplus.com/courses/codeigniter-essentials">Tutsplus - CodeIgniter Essentials</a></li>
							<li><a href="#">Tutsplus - PHP OOP</a></li>
							<li><a href="https://www.udemy.com/php-codeigniter/">Udemy - PHP CodeIgniter Learn CodeIgniter</a></li>
							<li><a href="https://www.lynda.com/MySQL-tutorials/PHP-MySQL-Essential-Training/119003-2.html">Lynda - PHP with MySQL Essential Training</a></li>
							<li><a href="https://www.udemy.com/oop-php-object-oriented-programing-with-project-1-course/">Udemy - PHP OOP Object Oriented Programming For Beginners</a></li>
							<li><a href="https://teamtreehouse.com/library/php-databases-with-pdo">Treehouse - PHP Databases With PDO</a></li>

						<h1>CSS/CSS3 Courses</h1>
							<li><a href="https://www.lynda.com/CSS-tutorials/CSS-Fundamentals/417645-2.html">Lynda - CSS Fundamentals</a></li>
							<li><a href="http://www.infiniteskills.com/training/learning-css3.html">Infiniteskills - Learning CSS3</a></li>
							<li><a href="https://webdesign.tutsplus.com/courses/css3-essentials">Tutsplus - CSS3 Essentials</a></li>
							<li><a href="https://webdesign.tutsplus.com/courses/css-tips-tricks">Tutsplus - CSS Tips & Tricks</a></li>
							<li><a href="https://www.lynda.com/CSS-tutorials/for-developers/52341-2.html">Lynda - CSS for Developers</a></li>
							<li><a href="https://www.lynda.com/Dreamweaver-tutorials/CSS-Transitions-Transforms/101072-2.html">Lynda - CSS: Transitions and Transforms</a></li>
							<li><a href="https://www.lynda.com/CSS-tutorials/CSS-Selectors/192036-2.html">Lynda - CSS Selectors</a></li>
							<li><a href="https://www.pluralsight.com/courses/mastering-css-animations-2135">Pluralsight - Mastering CSS Animations</a></li>

						<h1>SQL Courses</h1>							
							<li><a href="https://www.lynda.com/SQL-tutorials/SQL-Essential-Training/139988-2.html">Lynda - SQL Essential Training</a></li>
							<li><a href="https://www.lynda.com/Apache-tutorials/Installing-Apache-MySQL-PHP-new-record/362875-2.html">Lynda - Installing Apache, MySQL, and PHP</a></li>
							<li><a href="https://www.lynda.com/MySQL-tutorials/Up-Running-MySQL-Development/158373-2.html">Lynda - Up and Running with MySQL Development</a></li>
							<li><a href="https://www.lynda.com/MySQL-tutorials/MySQL-Essential-Training/139986-2.html">Lynda - MySQL Essential Training</a></li>
							<li><a href="https://code.tutsplus.com/courses/sql-essentials">Lynda - SQL Essentials</a></li>
							<li><a href="https://www.pluralsight.com/courses/mongodb-introduction">Pluralsight - Introduction to MongoDB</a></li>
							<li><a href="https://www.lynda.com/NoSQL-tutorials/Up-Running-NoSQL-Databases/111598-2.html">Lynda - Up and Running with NoSQL Databases</a></li>
							<li><a href="https://www.pluralsight.com/courses/mongodb-introduction">Pluralsight - Introduction to MongoDB</a></li>

						<h1>Ajax Courses</h1>
							<li><a href="https://www.lynda.com/Developer-tutorials/JavaScript-and-AJAX/114900-2.html">Lynda - JavaScript and AJAX</a></li>
							<li><a href="https://www.lynda.com/Ajax-tutorials/Ajax-PHP/513593-2.html">Lynda - AJAX with PHP</a></li>
							<li><a href="https://www.lynda.com/jQuery-tutorials/jQuery-Data-AJAX/150163-2.html">Lynda - jQuery Data with AJAX</a></li>
							<li><a href="https://www.lynda.com/jQuery-tutorials/jQuery-Data-AJAX/150163-2.html">Infiniteskills - Introduction To AJAX With jQuery</a></li>
							<li><a href="https://www.lynda.com/jQuery-tutorials/jQuery-Data-AJAX/150163-2.html">Tutsplus - Learning Ajax</a></li>

						<h1>Javascript & jQuery Courses</h1>
							<li><a href="https://code.tutsplus.com/courses/30-days-to-learn-jquery">Tutsplus - 30 Days to Learn jQuery</a></li>
							<li><a href="https://teamtreehouse.com/library/objectoriented-javascript">Treehouse - Object Oriented JavaScript</a></li>
							<li><a href="https://www.lynda.com/JavaScript-tutorials/JavaScript-Essential-Training/81266-2.html">Lynda - JavaScript Essential Training</a></li>
							<li><a href="https://code.tutsplus.com/courses/javascript-fundamentals">Tutsplus - JavaScript Fundamentals</a></li>
							<li><a href="http://www.informit.com/store/javascript-fundamentals-i-and-ii-livelessons-video-9780137044849">LiveLessons - Javascript Fundamentals I & II</a></li>
							<li><a href="https://www.lynda.com/JavaScript-tutorials/JavaScript-JSON/114901-2.html">Lynda - JavaScript and JSON</a></li>
							<li><a href="https://code.tutsplus.com/courses/object-oriented-javascript-with-es6">Tutsplus - Object-Oriented JavaScript With ES6</a></li>
							<li><a href="https://code.tutsplus.com/courses/javascript-es6-fundamentals">Tutsplus - JavaScript ES6 Fundamentals</a></li>
							<li><a href="https://www.lynda.com/jQuery-tutorials/jQuery-Essential-Training/494389-2.html">Lynda - jQuery Essential Training</a></li>
							<li><a href="https://www.lynda.com/jQuery-tutorials/jQuery-Creating-Plugins/364350-2.html">Lynda - jQuery: Creating Plugins</a></li>
							<li><a href="https://www.lynda.com/jQuery-tutorials/jQuery-Essential-Training/494389-2.html">Lynda - jQuery Essential Training</a></li>
							<li><a href="https://code.tutsplus.com/courses/introduction-to-jquery">Tutsplus - Introduction to jQuery</a></li>
							<li><a href="https://www.pluralsight.com/courses/jquery-tips-and-tricks">Pluralsight - jQuery Tips and Tricks</a></li>
							<li><a href="https://www.pluralsight.com/courses/jquery-fundamentals">Pluralsight - jQuery Fundamentals</a></li>
							<li><a href="https://www.pluralsight.com/courses/jquery-animation">Pluralsight - jQuery Animation</a></li>



						<h1>Java & Android Courses</h1>
							<li><a href="https://www.lynda.com/Android-tutorials/Android-App-Development-Essential-Training/442863-2.html">Lynda - Android App Development Essential Training</a></li>
							<li><a href="https://www.lynda.com/Android-tutorials/Android-Essential-Training-REVISION-Q4-2015/418271-2.html">Lynda - Android Essential Training</a></li>
							<li><a href="https://www.lynda.com/Java-tutorials/Java-Essential-Training/377484-2.html">Lynda - Java Essential Training</a></li>
							<li><a href="https://www.lynda.com/Java-tutorials/Up-Running-Java/184457-2.html">Lynda - Up and Running with Java</a></li>
							<li><a href="https://www.lynda.com/Java-tutorials/Java-Advanced-Training/107061-2.html">Lynda - Java Advanced Training</a></li>
							<li><a href="https://www.lynda.com/Java-tutorials/Java-Database-Integration-JDBC/110284-2.html">Lynda - Java Database Integration with JDBC</a></li>
							<li><a href="https://code.tutsplus.com/courses/learn-java-for-android">Tutsplus - Learn Java for Android</a></li>
							<li><a href="https://code.tutsplus.com/courses/getting-started-with-android">Tutsplus - Getting Started With Android</a></li>
							<li><a href="https://code.tutsplus.com/courses/introduction-to-computer-programming-with-java-101">Tutsplus - Introduction to Computer Programming with Java: 101</a></li>
							<li><a href="https://code.tutsplus.com/courses/introduction-to-computer-programming-with-java-201">Tutsplus - Introduction to Computer Programming with Java: 201</a></li>
							<li><a href="https://code.tutsplus.com/courses/introduction-to-computer-programming-with-java-301">Tutsplus - Introduction to Computer Programming with Java: 301</a></li>
							<li><a href="http://www.informit.com/store/android-app-development-fundamentals-i-and-ii-livelessons-9780132160629">LiveLessons - Android App Development Fundamentals I and II</a></li>
							<li><a href="http://www.informit.com/store/java-fundamentals-livelessons-part-i-of-iv-video-training-9780133519419">LiveLessons - Java Fundamentals Part I of IV</a></li>


						<h1>C# Courses</h1>
							<li><a href="http://www.infiniteskills.com/training/learning-c-sharp-design-patterns.html">O'reilly - Learning C# Design Patterns</a></li>
							<li><a href="http://www.infiniteskills.com/training/learning-c-sharp-best-practices.html">O'reilly - Learning C# Best Practices</a></li>
							<li><a href="http://www.infiniteskills.com/training/intermediate-c-sharp-programming.html">O'reilly - Intermediate C# Programming</a></li>
							<li><a href="https://www.lynda.com/C-tutorials/C-Essential-Training/188207-2.html">Lynda - C# Essential Training</a></li>
							<li><a href="https://www.lynda.com/C-tutorials/Up-Running-C/164452-2.html">Lynda - Up and Running with C#</a></li>
							<li><a href="https://www.lynda.com/LINQ-tutorials/LINQ-C-Essential-Training/397357-2.html">Lynda - LINQ with C# Essential Training</a></li>
							<li><a href="https://www.lynda.com/C-tutorials/C-Design-Patterns/473890-2.html">Lynda - C# Design Patterns</a></li>
							<li><a href="https://code.tutsplus.com/courses/30-days-to-learn-c">Tutsplus - 30 Days to Learn C#</a></li>
							<li><a href="https://code.tutsplus.com/courses/advanced-c">Tutsplus - Advanced C#</a></li>
							<li><a href="https://code.tutsplus.com/courses/design-patterns-in-c">Tutsplus - Design Patterns in C#</a></li>
							<li><a href="https://www.pluralsight.com/courses/csharp-6-from-scratch">Pluralsight - C# 6 from Scratch</a></li>
							<li><a href="https://www.pluralsight.com/courses/object-oriented-programming-fundamentals-csharp">Pluralsight - Object-Oriented Programming Fundamentals in C#</a></li>
							<li><a href="https://www.pluralsight.com/courses/c-sharp-fundamentals-with-visual-studio-2015">Pluralsight - C# Fundamentals with Visual Studio 2015</a></li>

						</ul>


					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section>
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-contact">Contact</h2>
					</div>
					<div class="bl-content">
						<h2>My Contact and Social Media Account</h2>
						<p>Sosyal medya hesaplarımdan benimle iletişime geçebilir ve ya mesaj bırakabilirsiniz.</p>
						<div class="socialmedia">
							<ul>
								<li><a class="face" href="https://fb.com/aras.yns"></a></li>
								<li><a class="tw" href="https://twitter.com/miftahulkariha"></a></li>
								<li><a class="insta" href="https://instagr.am/arasyns"></a></li>
							</ul>
						</div>

						<div style="clear:both;margin:0;padding:0"></div>


<div class="form-div">
    <form method="post" class="form" id="form1" action="index.php">
     
      <p class="name">
        <input name="name" type="text" class="" placeholder="Name" id="name" />
      </p>
      
      <p class="email">
        <input name="email" type="text" class="" id="email" placeholder="Email" />
      </p>
      
      <p class="text">
        <textarea name="message" class="" id="comment" placeholder="Comment"></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" class="button" value="SEND" name="sendMessage" id="button"/>
      </div>
    </form>
</div>





					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<!-- Panel items for the works -->
				<div class="bl-panel-items" id="bl-panel-work-items">
					<div data-panel="panel-1">
						<div>
							<img src="images/BittiBitiyor.png" />
							<h3>Alışveriş sitesi(veritabanı) projesi</h3>
							<p>Hacettepe Üniversitesi - Veritabanı Yönetim Sistemleri Dersi kapsamında geliştirilmiş dinamik web sitesi projesidir. Proje dahilinde birçok konuyu pekiştirecek SQL sorguları kullanılmıştır. Veritabanı yönetim sistemleri dersinin içeriğindeki bütün konular bu web projesi üzerinde uygulanarak ortaya dinamik bir alışveriş sitesi çıkarılmıştır.</p>
						</div>
					</div>
					<div data-panel="panel-2">
						<div>
							<img src="images/DeneySS.png" />
							<h3>Eğitim yazılımı kullanılarak öğrenmeyi kolaylaştırma projesi</h3>
							<p>Adobe Flash ve Action Script 3.0 kullanılarak kullanıcı etkileşimi olan kimya deneyi simülasyonu geliştirilmiştir. Sıvıların ayrıştırılması(damıtma) konulu bu eğitim kazanımını kullanıcıyı da deney ortamına etkileşimlerle katarak kazandırmayı amaçlamaktadır.</p>
						</div>
					</div>
					<div data-panel="panel-3">
						<div>
							<img src="images/hacep.png" />
							<h3>HACEP(Hacettepe Üniversitesi Etkinlik Paylaşım Platformu)</h3>
							<p>Bu proje Proje Geliştirme dersi kapsamında geliştirilmiş olup, Hacettepe Üniversitesi'nde düzenlenen sosyal aktivite ve etkinliklerin paylaşılması duyurulması ve kampüste gerçekleştirilen etkinliklere öğrencilerin katılımının sağlanması amaçlanmıştır. Bu proje Responsive Design kuralları çerçevesinde geliştirilmiş olup, dinamik web projesidir.</p>
						</div>
					</div>
					<div data-panel="panel-4">
						<div>
							<img src="images/OgrenciEvleri.png" />
							<h3>Hacettepe Üniversitesi Öğrenci Evlerinin Yönetiminin Gerçekleştirileceği Web Projesi</h3>
							<p>HU Öğrenci evlerinde barınan öğrencilerin, şikayet, istek, çamaşırhane randevusu, dilekçe yollama vb. birçok isteği ihtiyaç analizi yapılarak belirlenmiş ve bu proje ortaya çıkmıştır. Bu projenin amacı HU Öğrenci evlerinde barınan öğrencilerin web sitesi kolaylığıyla bütün isteklerini yönetime ulaştırması ve bu isteklerin yönetici panelinden değerlendirilerek öğrencilere bilgi verilmesini sağlamaktadır.</p>
						</div>
					</div>
					<div data-panel="panel-5">
						<div>
							<img src="images/uploaderplugin.png" />
							<h3>Drag & Drop File Uploader</h3>
							<p>Bu plugin javascript & ajax(php) ile geliştirilmiş olup web ortamına kolaylıkla dosya transfer edebilmeyi sağlamaktadır.</p>
						</div>
					</div>
					<div data-panel="panel-6">
						<div>
							<img src="images/oys.png" />
							<h3>Öğretim Yönetim Sistemi(PHP & JSON)</h3>
							<p>PHP, JSON ve Ajax ile realtime chat örneğini de içinde barındıran bir öğretim yönetim sistemidir. Belli derslerden oluşan ve belli bir kazanımı video, text ve etkileşimlerle öğrencinin anlamasını kavramasını sağlamak için geliştirilmiştir.. Veritabanı kullanılmamış JSON dosyalarına veriler kaydedilmiştir. Ajax ile de sürekli json dosyaları izlenerek realtime chat yapma imkanı barındırmaktadır.</p>
						</div>
					</div>
					<!--NEW PANEL ADDED AREA-->
					<nav>
						<span class="bl-next-work">&gt; Next Project</span>
						<span class="bl-icon bl-icon-close"></span>
					</nav>
				</div>
			</div>
		</div><!-- /container -->
		<div class="profile">
			<img src="images/yns.jpg">
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/boxlayout.js"></script>
		<script>
			$(function() {
				Boxlayout.init();
			});
		</script>
	</body>
</html>
