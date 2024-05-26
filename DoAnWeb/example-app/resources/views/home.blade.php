<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<title>Dự Án Nuôi Em</title>

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="resources/images/logo.svg" type="image/png">
	<link rel="stylesheet" href="{{ asset('resources/css/animate.css') }}">
	<link rel="stylesheet" href="resources/css/LineIcons.2.0.css">
	<link rel="stylesheet" href="resources/css/bootstrap-5.0.5-alpha.min.css">
	<link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">
	<div id="fb-root"></div>

</head>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger intent="WELCOME" chat-title="NuoiEm" agent-id="13f734de-d4f4-42a3-b5f0-e13ca2e8878d" language-code="en"></df-messenger>

<body>
	<div class="preloader">
		<div class="loader">
			<div class="ytp-spinner">
				<div class="ytp-spinner-container">
					<div class="ytp-spinner-rotator">
						<div class="ytp-spinner-left">
							<div class="ytp-spinner-circle"></div>
						</div>
						<div class="ytp-spinner-right">
							<div class="ytp-spinner-circle"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header class="header_area">
    <div id="header_navbar" class="header_navbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img id="logo" src="resources/images/logo.svg" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="page-scroll" href="/danhsachtreem">Nhận Mã</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#tra-ma">Tra Mã</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#tham-em">Thăm Em</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('hesinhthai') }}">Hệ Sinh Thái</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/chuyenkhoan" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Số Tài Khoản</a>
                                </li>
                                <li class="nav-item">
                                    <a class="header-btn btn-hover" href="/login">Quản trị</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

	<section id="gioi-thieu" class="hero-area bg_cover">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-5 offset-xl-7 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
					<div class="hero-content">
						<h2 class="mb-30 wow fadeInUp" data-wow-delay=".2s">Sức Mạnh Bữa Ăn Trưa 8.500 Đồng</h2>
						<p class="wow fadeInUp" data-wow-delay=".4s">Dự án “Nuôi em” bắt đầu hoạt động từ năm 2014, do tổ chức thiện nguyện Niềm tin phụ trách.

							Nhận thấy rằng, dù đã được hỗ trợ xây trường, cung cấp sách vở nhưng các em vùng cao vẫn phải bỏ học vì “đói ăn” khi đến trường. Đây là nguyên nhân trực tiếp khiến hơn 90% các em bỏ học.</p>

						<p class="wow fadeInUp" data-wow-delay=".4s"> Do vậy, dự án “Nuôi em” đã ra đời, với mục tiêu cung cấp những bữa ăn đầy đủ, giúp các em có thêm động lực đến trường. Mỗi bữa ăn có chi phí chỉ 8500 đồng do các thầy cô tại trường nấu, nhưng đầy đủ chất dinh dưỡng, ấm nóng tình thương, là một động lực vô cùng to lớn tiếp thêm sức mạnh cho các bé trên con đường đến trường.</p>

					</div>
				</div>
			</div>
		</div>
		<div class="hero-left">
			<img class="img-fluid" src="https://img.cand.com.vn/NewFiles/Images/2022/10/27/1-1666870392779.jpg" alt="">
		</div>
	</section>
	<section id="skill" class="skill-area pt-170">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7 col-md-10 mx-auto">
					<div class="section-title text-center">
						<h2 class="mb-15 wow fadeInUp" data-wow-delay=".2s"> Từ 2018, Không Chỉ Là Nuôi Cơm Trưa</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-skill wow fadeInUp" data-wow-delay=".2s">
						<div class="skill-icon">
							<i class="lni lni-drop"></i>
						</div>
						<div class="skill-content">
							<h4>Dự án lọc nước bình gốm Unicef đã triển khai tại 500+ điểm bản từ 12/2018.</h4>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-skill wow fadeInUp" data-wow-delay=".4s">
						<div class="skill-icon">
							<i class="lni lni-reddit"></i>
						</div>
						<div class="skill-content">
							<h4>Dự án tủ đồ chơi cũ được triển khai 13 bản năm 2018 và mục tiêu phủ 100 điểm 2019-2020</h4>

						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-skill wow fadeInUp" data-wow-delay=".6s">
						<div class="skill-icon">
							<i class="lni lni-book"></i>
						</div>
						<div class="skill-content">
							<h4>Từ Dự án tủ sách vùng cao được triển khai trên 150 điểm bản trong năm học 2019 - 2020</h4>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="nhan-ma" class="course-area pt-140 pb-170">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7 col-md-10 mx-auto">
					<div class="section-title text-center mb-50">
						<h2 class="mb-15 wow fadeInUp" data-wow-delay=".2s">Danh Sách Các Em</h2>
						<p class="wow fadeInUp" data-wow-delay=".4s">Các em cần được nhận nuôi để được hổ trọ về việc học tập và sinh hoạt,....</p>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-course wow fadeInUp" data-wow-delay=".2s">
						<div class="course-img">
							<a href="/danhsachtreem">
								<img src="https://img1.kienthucvui.vn/uploads/2021/02/11/anh-nhung-dua-tre-ngheo-duoc-nhan-banh-keo-tu-thien_114003675.jpg"  alt="..." class="img-fluid-ss">
							</a>
						</div>
						<div class="course-info">
							<h4><a href="/danhsachtreem">3000+ bé huyện Mường Nhé Tỉnh Điện Biên</a></h4>
							<div class="course-meta">
								<div class="meta-item">
									<i class="lni lni-user"></i>
									<span>3.5k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-eye"></i>
									<span>12k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-star"></i>
									<span>5.0</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-course wow fadeInUp" data-wow-delay=".4s">
						<div class="course-img">
							<a href="/danhsachtreem">
								<img src="http://giaoxutanviet.com/wp-content/uploads/2020/09/tre-vung-cao.jpg" alt="" class="img-fluid-ss">
							</a>
						</div>
						<div class="course-info">
							<h4><a href="/danhsachtreem">3000+ bé huyện Nậm Pồ Tỉnh Điện Biên</a></h4>
							<div class="course-meta">
								<div class="meta-item">
									<i class="lni lni-user"></i>
									<span>3k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-eye"></i>
									<span>11k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-star"></i>
									<span>5.0</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-course wow fadeInUp" data-wow-delay=".6s">
						<div class="course-img">
							<a href="/danhsachtreem">
								<img src="https://nortalic.com/wp-content/uploads/2022/06/z3453153246100_0fe6c283bef14adcf853d371b2423d14-1024x768.jpg" alt="" class="img-fluid-ss">
							</a>
						</div>
						<div class="course-info">
							<h4><a href="/danhsachtreem">644+ bé huyện Điện Biên Đông Tỉnh Điện Biên</a></h4>
							<div class="course-meta">
								<div class="meta-item">
									<i class="lni lni-user"></i>
									<span>2.5k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-eye"></i>
									<span>18k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-star"></i>
									<span>4.0</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-course wow fadeInUp" data-wow-delay=".2s">
						<div class="course-img">
							<a href="/danhsachtreem">
								<img src="https://i.ex-cdn.com/giadinhmoi.vn/files/danggiang/2018/03/29/hinh-anh-tre-em-vung-cao-ngo-nghinh-de-thuong-nhat-1-1007.png" alt="" class="img-fluid-ss">
							</a>
						</div>
						<div class="course-info">
							<h4><a href="/danhsachtreem">500+ bé Tỉnh Bắc Kạn</a></h4>
							<div class="course-meta">
								<div class="meta-item">
									<i class="lni lni-user"></i>
									<span>1.5k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-eye"></i>
									<span>15k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-star"></i>
									<span>4.5</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-course wow fadeInUp" data-wow-delay=".4s">
						<div class="course-img">
							<a href="/danhsachtreem">
								<img src="https://luatsux.vn/wp-content/uploads/2022/04/Hoan-canh-kho-khan-don-xin-xac-nhan-ho-ngheo.jpg" alt="" class="img-fluid-ss">
							</a>
						</div>
						<div class="course-info">
							<h4><a href="/danhsachtreem">200+ bé Tỉnh Đắk Lắk </a></h4>
							<div class="course-meta">
								<div class="meta-item">
									<i class="lni lni-user"></i>
									<span>1.9k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-eye"></i>
									<span>5k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-star"></i>
									<span>5.0</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-course wow fadeInUp" data-wow-delay=".6s">
						<div class="course-img">
							<a href="/danhsachtreem">
								<img src="https://file1.dangcongsan.vn/DATA/0/2016/01/19_qtvp-10_21_01_447.jpg" alt="" class="img-fluid-ss">
							</a>
						</div>
						<div class="course-info">
							<h4><a href="/danhsachtreem">355+ bé Tỉnh Lào Cai</a></h4>
							<div class="course-meta">
								<div class="meta-item">
									<i class="lni lni-user"></i>
									<span>1.2k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-eye"></i>
									<span>13k</span>
								</div>
								<div class="meta-item">
									<i class="lni lni-star"></i>
									<span>3.5</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-12">
					<div class="view-all-btn text-center">
						<a href="/danhsachtreem" class="main-btn">Xem Nhiều Hơn</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="welcome-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6">
					<div class="welcome-content">
						<div class="section-title">
							<h2 class="mb-35 wow fadeInUp" data-wow-delay=".2s">TẠI SAO CẦN QUYÊN GÓP BỮA ĂN TRƯA CHO TRẺ EM VÙNG CAO?</h2>
							<p>Trường học đã được xây dựng , sách vở cũng được quyên góp đầy đủ, các bé được giảng dạy miễn phí nhưng sau mỗi bữa trưa, lớp học lại càng thưa thớt. Sau vài hôm lại có 1 vài bé bỏ học. Khu trường cũng bỗng nhiên vắng lặng lạ thường. Các bạn có biết lí do là gì không</p>
							<img src="https://w.ladicdn.com/s1550x750/5c3219ef974b7861952fed1d/banner-20220808090753.png" alt="">
						</div>
						<div class="content">
							<p class="mb-35 wow fadeInUp" data-wow-delay=".4s">Nhưng một vài tháng nay, khung cảnh trường học đã khác, buổi trưa đã không còn trống trải mà đầy ắp những tiếng nói cười và hình ảnh những đứa trẻ ăn những bữa ăn với khuôn mặt hạnh phúc. Đó nhờ vào sức mạnh mà dự án Nuôi em mang lại - sức mạnh của bữa ăn 8500. Tất cả các em học sinh được nuôi cơm trưa từ thứ hai tới thứ sáu. </p>
							<div class="read-more" style="display: none;">
								<img src="https://w.ladicdn.com/s900x700/5c3219ef974b7861952fed1d/sgagwehw-20220808091422.png" alt="">
								<p>Các bé vùng cao Tây Bắc xa xôi, hẻo lánh để đến với “con chữ” có rất nhiều khó khăn, gian khổ. Chỉ vì để được đến trường học tập với thầy cô và các bạn, các em bé ấy không ngại những quãng đường xa xôi hàng km hay thức dậy rất sớm để được cắp sách đếntrường.</p>
							</div>
							<div class="fb-like" data-href="https://861a-116-106-111-83.ngrok-free.app" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
							<button class="btn btn-link" onclick="toggleReadMore()">Xem Thêm</button>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="welcome-img">
						<img src="https://w.ladicdn.com/s850x750/59fb4d0b9bc14c499ef70892/3-1541577888.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="categories-area pt-170 pb-170">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-10 mx-auto">
					<div class="section-title text-center">
						<h2 class="wow fadeInUp" data-wow-delay=".2s">Quy Trình Hoạt Động</h2>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<a href="javascript:void(0)" class="d-block category-wrapper">
						<div class="single-category">
							<i class="lni lni-code-alt"></i>
							<h3>Nhận Em</h3>
							<p>Ấn vào nút Nhận mã phía dưới rồi inbox tin nhắn fanpage Nuôi Em theo cú pháp: Nhận mã nuôi em</p>
							<button class="quy-trinh-btn">Nhận Mã</button>
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<a href="javascript:void(0)" class="d-block category-wrapper">
						<div class="single-category">
							<i class="lni lni-coin"></i>
							<h3>Gửi Tiền</h3>
							<p>Nội dung chuyển khoản ghi rõ “Mã bé nhận nuôi” + Tên bạn</p>
							<p>Số tài khoản: 0123456789675</p>
							<p>Ngân Hàng: VietComBank</p>
							<p>Chủ TK: Nguyễn Thị Như Ý
							<p>
							<p>Số điện thoại: 0123456789</p>
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<a href="javascript:void(0)" class="d-block category-wrapper">
						<div class="single-category">
							<i class="lni lni-target-customer"></i>
							<h3>Vào group</h3>
							<p>Group là nơi các anh chị nuôi được cập nhật thông tin mới nhất, lịch thăm em, vote công khai lấy ý kiến xây dựng dự án. Tham gia để chủ động nắm bắt thông tin!</p>
							<button class="quy-trinh-btn">Vào group</button>
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<a href="javascript:void(0)" class="d-block category-wrapper">
						<div class="single-category">
							<i class="lni lni-seo"></i>
							<h3>Tra Mã</h3>
							<p>Tháng 9, các bé bắt đầu ăn, dự án bắt đầu nhận thông tin, hình ảnh từ PGD gửi về.
								bắt đầu có thông báo có dữ liệu tra cứu trên Fanpage. Anh chị theo dõi và chủ động làm theo hướng dẫn đã gửi khi nhận mã.</p>
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<a href="javascript:void(0)" class="d-block category-wrapper">
						<div class="single-category">
							<i class="lni lni-camera"></i>
							<h3>Ảnh/Video Tháng</h3>
							<p>Khi tra cứu thành công thông tin chi tiết các bé.Sẽ kèm theo riêng mỗi bé một đường link,nơi đây đầu mỗi tháng định kì sẽ được cập nhật ảnh/video của bé</p>
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<a href="javascript:void(0)" class="d-block category-wrapper">
						<div class="single-category">
							<i class="lni lni-direction-alt"></i>
							<h3>Thăm Em</h3>
							<p>Ai nuôi bé nào đi thăm bé đó.Tuyệt đối không đưa trẻ ra khỏi địa bàn</p>
							<p>Khi bạn tiện, có thể thăm không cùng đoàn,cần báo trước để được hỗ trợ </p>
							<button class="quy-trinh-btn">Lịch Thăm Em</button>
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<a href="javascript:void(0)" class="d-block category-wrapper">
						<div class="single-category">
							<i class="lni lni-keyword-research"></i>
							<h3>Quy Định</h3>
							<p>Mỗi em một mã và 01 ảnh duy nhất, không trùng trong hàng NGHÌN em nhỏ.</p>
							<p>Để đảm bảo an toàn, bảo mật thông tin cho các bé, mỗi bé chỉ có 01 người nhận nuôi duy nhất.</p>
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
					<a href="javascript:void(0)" class="d-block category-wrapper">
						<div class="single-category">
							<i class="lni lni-android"></i>
							<h3>Khuyến Khích</h3>
							<p>Một người có thể nuôi nhiều bé: Chúng tôi không giới hạn số lượng bé trên mỗi người nuôi.</p>
							<p>Khuyến khích nuôi bé nhiều hơn 1 năm: Mỗi bé đều đặn đi học, vì thế chúng tôi khuyến khích bạn tham gia nuôi bé nhiều hơn 1 năm.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section id="tham-em" class="blog-area pt-170 pb-140">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7">
					<div class="section-title">
						<h2 class="wow fadeInUp" data-wow-delay=".2s">Các Dự Án Liên Kết</h2>
					</div>
				</div>
			</div>

			<div class="row">
				@foreach ($allTinTucRecords as $DS)
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-blog">
						<div class="blog-img">
							<a href="{{$DS->Link}}" class="d-block">
								<img src="{{ $DS->HinhAnh }}" alt="">
							</a>
						</div>
						<div class="blog-content">
							<h4><a href="{{$DS->Link}}	">{{ $DS->TieuDe }}</a></h4>
							<p>{{ $DS->NoiDung }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<section id="he-sinh-thai" class="contact-area">
		<div class="map-bg">
			<img src="resources/images/map-bg.svg" alt="">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-5">
					<div class="section-title">
						<h2 class="wow fadeInUp" data-wow-delay=".2s">Nhắn Gửi Yêu Thương</h2>
						<p class="wow fadeInUp" data-wow-delay=".4s">Các bạn có thể gửi thông tin những em bé có cần giúp đỡ đến cho chúng tôi có cơ hội giúp đỡ các em trên bước đường tương lai!</p>
					</div>
					<div class="contact-content">
						<h3>Hoặc Liên Hệ</h3>
						<h4><a href="javascript:void(0)">0123456789</a></h4>
						<h4><a href="javascript:void(0)">hello@gmail.com</a></h4>
					</div>
				</div>
				<div class="col-xl-7 col-lg-7">
					<div class="contact-form-wrapper">
						<form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Tên Người Gửi" name="HotenNguoi3" id="HotenNguoi3">
								</div>
								<div class="col-md-6">
									<input type="email" placeholder="Email" name="Email" id="Email">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Tên Bé" name="TenBe" id="TenBe">
								</div>
								<div class="col-md-6">
									<input type="file" placeholder="Hình ảnh" name="file" id="image">
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<textarea name="message" id="message" rows="8" placeholder="Miêu Tả Về bé "></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-12 text-right">
									<button class="main-btn btn-hover" type="submit">Send</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer id="footer" class="footer-area pt-170">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="footer-widget">
						<a href="index.html" class="logo d-blok">
							<img src="resources/images/logo.svg" alt="">
						</a>
						<p>Mọi đóng góp của bạn, dù là nhỏ nhất, đều có thể tạo nên sự khác biệt lớn lao cho cuộc sống của những người đang cần giúp đỡ.</p>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 offset-xl-1 offset-lg-1 col-md-6">
					<div class="footer-widget">
						<h5>Quick Links</h5>
						<ul>
							<li><a href="javascript:void(0)">Home</a></li>
							<li><a href="javascript:void(0)">Courses</a></li>
							<li><a href="javascript:void(0)">Eventd</a></li>
							<li><a href="javascript:void(0)">Blog</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="footer-widget">
						<h5>Liên Hệ</h5>
						<ul>
							<li>
								<p>Số ĐT: +84 3939 28815</p>
							</li>
							<li>
								<p>Email: y021101022@tgu.edu.vn</p>
							</li>
							<li>
								<p>Địa Chỉ: Phường 5<br> Mỹ Tho</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>



	<a href="#" class="back-to-top btn-hover"><i class="lni lni-chevron-up"></i></a>




	<script src="resources/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>


	<script src="resources/js/wow.min.js"></script>


	<script src="resources/js/main.js"></script>

	<script>
		var pageLink = document.querySelectorAll('.page-scroll');

		pageLink.forEach(elem => {
			elem.addEventListener('click', e => {
				e.preventDefault();
				document.querySelector(elem.getAttribute('href')).scrollIntoView({
					behavior: 'smooth',
					offsetTop: 1 - 60,
				});
			});
		});


		function onScroll(event) {
			var sections = document.querySelectorAll('.page-scroll');
			var scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

			for (var i = 0; i < sections.length; i++) {
				var currLink = sections[i];
				var val = currLink.getAttribute('href');
				var refElement = document.querySelector(val);
				var scrollTopMinus = scrollPos + 73;
				if (refElement.offsetTop <= scrollTopMinus && (refElement.offsetTop + refElement.offsetHeight > scrollTopMinus)) {
					document.querySelector('.page-scroll').classList.remove('active');
					currLink.classList.add('active');
				} else {
					currLink.classList.remove('active');
				}
			}
		};

		window.document.addEventListener('scroll', onScroll);


		let navbarToggler = document.querySelector(".navbar-toggler");
		var navbarCollapse = document.querySelector(".navbar-collapse");

		document.querySelectorAll(".page-scroll").forEach(e =>
			e.addEventListener("click", () => {
				navbarToggler.classList.remove("active");
				navbarCollapse.classList.remove('show')
			})
		);
		navbarToggler.addEventListener('click', function() {
			navbarToggler.classList.toggle("active");
		});
	</script>
	<!-- fb -->
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v19.0" nonce="Sae79XD8"></script>

</body>

</html>
<script>
	function toggleReadMore() {
		var readMore = document.querySelector('.read-more');
		var btn = document.querySelector('.btn');

		if (readMore.style.display === 'none') {
			readMore.style.display = 'block';
			btn.textContent = 'Ẩn Bớt';
		} else {
			readMore.style.display = 'none';
			btn.textContent = 'Xem Thêm';
		}
	}
</script>
<style >
	.quy-trinh-btn {
		width: 150px;
		height: 40px;
		background-color: #337ab7;
		color: #ffffff;
		font-family: Arial, sans-serif;
		font-size: 16px;
		font-weight: bold;
		border: none;
		border-radius: 5px;
		box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
		transition: all 0.2s ease-in-out;

		&:hover {
			background-color: #286090;
			box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
		}

		&:active {
			background-color: #1e476a;
			box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
		}
	}

	.back-to-top {
		position: fixed;
		right: 100px;
		bottom: 20px;
		display: none;
	}

	.btn-hover:hover .back-to-top {
		display: block;
	}

	h1 {
		font-size: 24px;
		font-weight: bold;
		margin-top: 20px;
	}

	p {
		font-size: 16px;
		line-height: 1.5;
		margin-bottom: 10px;
	}

	ul {
		list-style: none;
		padding: 0;
	}

	ul li {
		margin-bottom: 10px;
	}

	strong {
		font-weight: bold;
	}

	.image-container {
		text-align: center;
		margin-bottom: 10px;
	}

	img {
		width: 500px;
		height: auto;
	}

	.img-fluid {
		width: 700px;
		height: auto;

	}.single-blog {
    height: 500px; /* Đặt chiều cao cố định cho mỗi phần tử single-blog */
    overflow: hidden; /* Ẩn nội dung vượt quá chiều cao */
}

.single-blog .blog-img {
    height: 40%; /* Đặt chiều cao của phần ảnh trong mỗi phần tử single-blog */
    overflow: hidden; /* Ẩn phần dư thừa của hình ảnh */
}

.single-blog .blog-img img {
    width: 100%; /* Đảm bảo hình ảnh đầy đủ chiều rộng */
    height: auto; /* Đảm bảo hình ảnh tỷ lệ đúng */
}

.single-blog .blog-content {
    height: 70%; /* Đặt chiều cao của phần nội dung trong mỗi phần tử single-blog */
    overflow: hidden; /* Ẩn phần dư thừa của nội dung */
}
.img-fluid-ss{
	height: 250px;
}
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
html {
  scroll-behavior: smooth;
}

body {
  font-family: "Poppins", sans-serif;
  font-weight: normal;
  font-style: normal;
  color: #747E88;
}

* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

img {
  max-width: 100%;
}

a:focus,
input:focus,
textarea:focus,
button:focus {
  text-decoration: none;
  outline: none;
}

a:focus,
a:hover {
  text-decoration: none;
}

i,
span,
a {
  display: inline-block;
  text-decoration: none;
}

a {
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

audio,
canvas,
iframe,
img,
svg,
video {
  vertical-align: middle;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  color: #283747;
  margin: 0px;
}

h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
  color: inherit;
}

h1 {
  font-size: 48px;
}

h2 {
  font-size: 45px;
}

@media (max-width: 767px) {
  h2 {
    font-size: 36px;
  }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
  h2 {
    font-size: 40px;
  }
}

h3 {
  font-size: 28px;
}

h4 {
  font-size: 22px;
}

h5 {
  font-size: 18px;
}

h6 {
  font-size: 16px;
}

ul, ol {
  margin: 0px;
  padding: 0px;
  list-style-type: none;
}

p {
  font-size: 16px;
  font-weight: 400;
  line-height: 26px;
  color: #747E88;
  margin: 0px;
}

.bg_cover {
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
}

.success {
  color: #7CB637;
}

.error {
  color: #FF4B22;
}

input,
textarea {
  width: 100%;
  border-radius: 10px;
  background: #fff;
  font-size: 16px;
  padding: 17px 30px;
  margin-bottom: 20px;
  color: #868AAA;
  -webkit-box-shadow: 0px 0px 51px rgba(180, 180, 180, 0.16);
  box-shadow: 0px 0px 51px rgba(180, 180, 180, 0.16);
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
  border: 1px solid transparent;
}

input::-webkit-input-placeholder,
textarea::-webkit-input-placeholder {
  opacity: 1;
}

input:-ms-input-placeholder,
textarea:-ms-input-placeholder {
  opacity: 1;
}

input::-ms-input-placeholder,
textarea::-ms-input-placeholder {
  opacity: 1;
}

input::placeholder,
textarea::placeholder {
  opacity: 1;
}

input:focus,
textarea:focus {
  border-color: #F2A92C;
}

.back-to-top {
  width: 45px;
  height: 45px;
  background: #F2A92C;
  text-align: center;
  line-height: 45px;
  font-size: 20px;
  color: #fff;
  border-radius: 5px;
  position: fixed;
  bottom: 30px;
  right: 30px;
  z-index: 99999;
  cursor: pointer;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.back-to-top.btn-hover {
  position: fixed;
  z-index: 99999;
}

.back-to-top:hover {
  color: #fff;
}

*:focus {
  outline: none;
}

/*===== All Button Style =====*/
.main-btn {
  display: inline-block;
  font-weight: 600;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border: 0;
  padding: 17px 35px;
  font-weight: 500;
  font-size: 15px;
  border-radius: 30px;
  color: #283747;
  cursor: pointer;
  z-index: 5;
  background: #fff;
  -webkit-transition: all 0.4s ease-out 0s;
  transition: all 0.4s ease-out 0s;
}

.main-btn:hover {
  color: #F2A92C;
}

.btn-hover {
  position: relative;
  z-index: 1;
  overflow: hidden;
}

.btn-hover::after {
  content: '';
  position: absolute;
  width: 0%;
  height: 100%;
  background: rgba(255, 255, 255, 0.1);
  top: 0;
  left: 0;
  z-index: -1;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.btn-hover:hover::after {
  width: 100%;
}

/*===== All Section Title Style =====*/
.section-title h2 {
  font-size: 45px;
  line-height: 55px;
  font-weight: 600;
  margin-bottom: 20px;
}

.section-title p {
  font-size: 16px;
  font-weight: 400;
  line-height: 26px;
  margin-bottom: 60px;
}

/*===== All Preloader Style =====*/
.preloader {
  /* Body Overlay */
  position: fixed;
  top: 0;
  left: 0;
  display: table;
  height: 100%;
  width: 100%;
  /* Change Background Color */
  background: #fff;
  z-index: 99999;
}

.preloader .loader {
  display: table-cell;
  vertical-align: middle;
  text-align: center;
}

.preloader .loader .ytp-spinner {
  position: absolute;
  left: 50%;
  top: 50%;
  width: 64px;
  margin-left: -32px;
  z-index: 18;
  pointer-events: none;
}

.preloader .loader .ytp-spinner .ytp-spinner-container {
  pointer-events: none;
  position: absolute;
  width: 100%;
  padding-bottom: 100%;
  top: 50%;
  left: 50%;
  margin-top: -50%;
  margin-left: -50%;
  -webkit-animation: ytp-spinner-linspin 1568.2353ms linear infinite;
  animation: ytp-spinner-linspin 1568.2353ms linear infinite;
}

.preloader .loader .ytp-spinner .ytp-spinner-container .ytp-spinner-rotator {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-animation: ytp-spinner-easespin 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
  animation: ytp-spinner-easespin 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
}

.preloader .loader .ytp-spinner .ytp-spinner-container .ytp-spinner-rotator .ytp-spinner-left {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  overflow: hidden;
  right: 50%;
}

.preloader .loader .ytp-spinner .ytp-spinner-container .ytp-spinner-rotator .ytp-spinner-right {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
  left: 50%;
}

.preloader .loader .ytp-spinner-circle {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  position: absolute;
  width: 200%;
  height: 100%;
  border-style: solid;
  /* Spinner Color */
  border-color: #F2A92C #F2A92C #F9F9F9;
  border-radius: 50%;
  border-width: 6px;
}

.preloader .loader .ytp-spinner-left .ytp-spinner-circle {
  left: 0;
  right: -100%;
  border-right-color: #F9F9F9;
  -webkit-animation: ytp-spinner-left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
  animation: ytp-spinner-left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
}

.preloader .loader .ytp-spinner-right .ytp-spinner-circle {
  left: -100%;
  right: 0;
  border-left-color: #F9F9F9;
  -webkit-animation: ytp-right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
  animation: ytp-right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
}

/* Preloader Animations */
@-webkit-keyframes ytp-spinner-linspin {
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes ytp-spinner-linspin {
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@-webkit-keyframes ytp-spinner-easespin {
  12.5% {
    -webkit-transform: rotate(135deg);
    transform: rotate(135deg);
  }
  25% {
    -webkit-transform: rotate(270deg);
    transform: rotate(270deg);
  }
  37.5% {
    -webkit-transform: rotate(405deg);
    transform: rotate(405deg);
  }
  50% {
    -webkit-transform: rotate(540deg);
    transform: rotate(540deg);
  }
  62.5% {
    -webkit-transform: rotate(675deg);
    transform: rotate(675deg);
  }
  75% {
    -webkit-transform: rotate(810deg);
    transform: rotate(810deg);
  }
  87.5% {
    -webkit-transform: rotate(945deg);
    transform: rotate(945deg);
  }
  to {
    -webkit-transform: rotate(1080deg);
    transform: rotate(1080deg);
  }
}

@keyframes ytp-spinner-easespin {
  12.5% {
    -webkit-transform: rotate(135deg);
    transform: rotate(135deg);
  }
  25% {
    -webkit-transform: rotate(270deg);
    transform: rotate(270deg);
  }
  37.5% {
    -webkit-transform: rotate(405deg);
    transform: rotate(405deg);
  }
  50% {
    -webkit-transform: rotate(540deg);
    transform: rotate(540deg);
  }
  62.5% {
    -webkit-transform: rotate(675deg);
    transform: rotate(675deg);
  }
  75% {
    -webkit-transform: rotate(810deg);
    transform: rotate(810deg);
  }
  87.5% {
    -webkit-transform: rotate(945deg);
    transform: rotate(945deg);
  }
  to {
    -webkit-transform: rotate(1080deg);
    transform: rotate(1080deg);
  }
}

@-webkit-keyframes ytp-spinner-left-spin {
  0% {
    -webkit-transform: rotate(130deg);
    transform: rotate(130deg);
  }
  50% {
    -webkit-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  to {
    -webkit-transform: rotate(130deg);
    transform: rotate(130deg);
  }
}

@keyframes ytp-spinner-left-spin {
  0% {
    -webkit-transform: rotate(130deg);
    transform: rotate(130deg);
  }
  50% {
    -webkit-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  to {
    -webkit-transform: rotate(130deg);
    transform: rotate(130deg);
  }
}

@-webkit-keyframes ytp-right-spin {
  0% {
    -webkit-transform: rotate(-130deg);
    transform: rotate(-130deg);
  }
  50% {
    -webkit-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  to {
    -webkit-transform: rotate(-130deg);
    transform: rotate(-130deg);
  }
}

@keyframes ytp-right-spin {
  0% {
    -webkit-transform: rotate(-130deg);
    transform: rotate(-130deg);
  }
  50% {
    -webkit-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  to {
    -webkit-transform: rotate(-130deg);
    transform: rotate(-130deg);
  }
}

.mt-5 {
  margin-top: 5px;
}

.mt-10 {
  margin-top: 10px;
}

.mt-15 {
  margin-top: 15px;
}

.mt-20 {
  margin-top: 20px;
}

.mt-25 {
  margin-top: 25px;
}

.mt-30 {
  margin-top: 30px;
}

.mt-35 {
  margin-top: 35px;
}

.mt-40 {
  margin-top: 40px;
}

.mt-45 {
  margin-top: 45px;
}

.mt-50 {
  margin-top: 50px;
}

.mt-55 {
  margin-top: 55px;
}

.mt-60 {
  margin-top: 60px;
}

.mt-65 {
  margin-top: 65px;
}

.mt-70 {
  margin-top: 70px;
}

.mt-75 {
  margin-top: 75px;
}

.mt-80 {
  margin-top: 80px;
}

.mt-85 {
  margin-top: 85px;
}

.mt-90 {
  margin-top: 90px;
}

.mt-95 {
  margin-top: 95px;
}

.mt-100 {
  margin-top: 100px;
}

.mt-105 {
  margin-top: 105px;
}

.mt-110 {
  margin-top: 110px;
}

.mt-115 {
  margin-top: 115px;
}

.mt-120 {
  margin-top: 120px;
}

.mt-125 {
  margin-top: 125px;
}

.mt-130 {
  margin-top: 130px;
}

.mt-135 {
  margin-top: 135px;
}

.mt-140 {
  margin-top: 140px;
}

.mt-145 {
  margin-top: 145px;
}

.mt-150 {
  margin-top: 150px;
}

.mt-155 {
  margin-top: 155px;
}

.mt-160 {
  margin-top: 160px;
}

.mt-165 {
  margin-top: 165px;
}

.mt-170 {
  margin-top: 170px;
}

.mt-175 {
  margin-top: 175px;
}

.mt-180 {
  margin-top: 180px;
}

.mt-185 {
  margin-top: 185px;
}

.mt-190 {
  margin-top: 190px;
}

.mt-195 {
  margin-top: 195px;
}

.mt-200 {
  margin-top: 200px;
}

.mt-205 {
  margin-top: 205px;
}

.mt-210 {
  margin-top: 210px;
}

.mt-215 {
  margin-top: 215px;
}

.mt-220 {
  margin-top: 220px;
}

.mt-225 {
  margin-top: 225px;
}

.mb-5 {
  margin-bottom: 5px;
}

.mb-10 {
  margin-bottom: 10px;
}

.mb-15 {
  margin-bottom: 15px;
}

.mb-20 {
  margin-bottom: 20px;
}

.mb-25 {
  margin-bottom: 25px;
}

.mb-30 {
  margin-bottom: 30px;
}

.mb-35 {
  margin-bottom: 35px;
}

.mb-40 {
  margin-bottom: 40px;
}

.mb-45 {
  margin-bottom: 45px;
}

.mb-50 {
  margin-bottom: 50px;
}

.mb-55 {
  margin-bottom: 55px;
}

.mb-60 {
  margin-bottom: 60px;
}

.mb-65 {
  margin-bottom: 65px;
}

.mb-70 {
  margin-bottom: 70px;
}

.mb-75 {
  margin-bottom: 75px;
}

.mb-80 {
  margin-bottom: 80px;
}

.mb-85 {
  margin-bottom: 85px;
}

.mb-90 {
  margin-bottom: 90px;
}

.mb-95 {
  margin-bottom: 95px;
}

.mb-100 {
  margin-bottom: 100px;
}

.mb-105 {
  margin-bottom: 105px;
}

.mb-110 {
  margin-bottom: 110px;
}

.mb-115 {
  margin-bottom: 115px;
}

.mb-120 {
  margin-bottom: 120px;
}

.mb-125 {
  margin-bottom: 125px;
}

.mb-130 {
  margin-bottom: 130px;
}

.mb-135 {
  margin-bottom: 135px;
}

.mb-140 {
  margin-bottom: 140px;
}

.mb-145 {
  margin-bottom: 145px;
}

.mb-150 {
  margin-bottom: 150px;
}

.mb-155 {
  margin-bottom: 155px;
}

.mb-160 {
  margin-bottom: 160px;
}

.mb-165 {
  margin-bottom: 165px;
}

.mb-170 {
  margin-bottom: 170px;
}

.mb-175 {
  margin-bottom: 175px;
}

.mb-180 {
  margin-bottom: 180px;
}

.mb-185 {
  margin-bottom: 185px;
}

.mb-190 {
  margin-bottom: 190px;
}

.mb-195 {
  margin-bottom: 195px;
}

.mb-200 {
  margin-bottom: 200px;
}

.mb-205 {
  margin-bottom: 205px;
}

.mb-210 {
  margin-bottom: 210px;
}

.mb-215 {
  margin-bottom: 215px;
}

.mb-220 {
  margin-bottom: 220px;
}

.mb-225 {
  margin-bottom: 225px;
}

.pt-5 {
  padding-top: 5px;
}

.pt-10 {
  padding-top: 10px;
}

.pt-15 {
  padding-top: 15px;
}

.pt-20 {
  padding-top: 20px;
}

.pt-25 {
  padding-top: 25px;
}

.pt-30 {
  padding-top: 30px;
}

.pt-35 {
  padding-top: 35px;
}

.pt-40 {
  padding-top: 40px;
}

.pt-45 {
  padding-top: 45px;
}

.pt-50 {
  padding-top: 50px;
}

.pt-55 {
  padding-top: 55px;
}

.pt-60 {
  padding-top: 60px;
}

.pt-65 {
  padding-top: 65px;
}

.pt-70 {
  padding-top: 70px;
}

.pt-75 {
  padding-top: 75px;
}

.pt-80 {
  padding-top: 80px;
}

.pt-85 {
  padding-top: 85px;
}

.pt-90 {
  padding-top: 90px;
}

.pt-95 {
  padding-top: 95px;
}

.pt-100 {
  padding-top: 100px;
}

.pt-105 {
  padding-top: 105px;
}

.pt-110 {
  padding-top: 110px;
}

.pt-115 {
  padding-top: 115px;
}

.pt-120 {
  padding-top: 120px;
}

.pt-125 {
  padding-top: 125px;
}

.pt-130 {
  padding-top: 130px;
}

.pt-135 {
  padding-top: 135px;
}

.pt-140 {
  padding-top: 140px;
}

.pt-145 {
  padding-top: 145px;
}

.pt-150 {
  padding-top: 150px;
}

.pt-155 {
  padding-top: 155px;
}

.pt-160 {
  padding-top: 160px;
}

.pt-165 {
  padding-top: 165px;
}

.pt-170 {
  padding-top: 170px;
}

.pt-175 {
  padding-top: 175px;
}

.pt-180 {
  padding-top: 180px;
}

.pt-185 {
  padding-top: 185px;
}

.pt-190 {
  padding-top: 190px;
}

.pt-195 {
  padding-top: 195px;
}

.pt-200 {
  padding-top: 200px;
}

.pt-205 {
  padding-top: 205px;
}

.pt-210 {
  padding-top: 210px;
}

.pt-215 {
  padding-top: 215px;
}

.pt-220 {
  padding-top: 220px;
}

.pt-225 {
  padding-top: 225px;
}

.pb-5 {
  padding-bottom: 5px;
}

.pb-10 {
  padding-bottom: 10px;
}

.pb-15 {
  padding-bottom: 15px;
}

.pb-20 {
  padding-bottom: 20px;
}

.pb-25 {
  padding-bottom: 25px;
}

.pb-30 {
  padding-bottom: 30px;
}

.pb-35 {
  padding-bottom: 35px;
}

.pb-40 {
  padding-bottom: 40px;
}

.pb-45 {
  padding-bottom: 45px;
}

.pb-50 {
  padding-bottom: 50px;
}

.pb-55 {
  padding-bottom: 55px;
}

.pb-60 {
  padding-bottom: 60px;
}

.pb-65 {
  padding-bottom: 65px;
}

.pb-70 {
  padding-bottom: 70px;
}

.pb-75 {
  padding-bottom: 75px;
}

.pb-80 {
  padding-bottom: 80px;
}

.pb-85 {
  padding-bottom: 85px;
}

.pb-90 {
  padding-bottom: 90px;
}

.pb-95 {
  padding-bottom: 95px;
}

.pb-100 {
  padding-bottom: 100px;
}

.pb-105 {
  padding-bottom: 105px;
}

.pb-110 {
  padding-bottom: 110px;
}

.pb-115 {
  padding-bottom: 115px;
}

.pb-120 {
  padding-bottom: 120px;
}

.pb-125 {
  padding-bottom: 125px;
}

.pb-130 {
  padding-bottom: 130px;
}

.pb-135 {
  padding-bottom: 135px;
}

.pb-140 {
  padding-bottom: 140px;
}

.pb-145 {
  padding-bottom: 145px;
}

.pb-150 {
  padding-bottom: 150px;
}

.pb-155 {
  padding-bottom: 155px;
}

.pb-160 {
  padding-bottom: 160px;
}

.pb-165 {
  padding-bottom: 165px;
}

.pb-170 {
  padding-bottom: 170px;
}

.pb-175 {
  padding-bottom: 175px;
}

.pb-180 {
  padding-bottom: 180px;
}

.pb-185 {
  padding-bottom: 185px;
}

.pb-190 {
  padding-bottom: 190px;
}

.pb-195 {
  padding-bottom: 195px;
}

.pb-200 {
  padding-bottom: 200px;
}

.pb-205 {
  padding-bottom: 205px;
}

.pb-210 {
  padding-bottom: 210px;
}

.pb-215 {
  padding-bottom: 215px;
}

.pb-220 {
  padding-bottom: 220px;
}

.pb-225 {
  padding-bottom: 225px;
}

/*===========================
    02.HEADER css 
===========================*/
/*===== NAVBAR =====*/
.header_navbar {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 999;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.sticky {
  position: fixed;
  z-index: 99;
  background-color: #fff;
  -webkit-box-shadow: 0px 20px 50px 0px rgba(0, 0, 0, 0.05);
  box-shadow: 0px 20px 50px 0px rgba(0, 0, 0, 0.05);
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.sticky .navbar {
  padding: 15px 0;
}

.navbar {
  padding: 25px 0;
  border-radius: 5px;
  position: relative;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.navbar-brand {
  padding: 0;
}

.navbar-brand img {
  width: 100px;
}

@media (max-width: 767px) {
  .navbar-brand img {
    width: 130px;
  }
}

.navbar-toggler {
  padding: 0;
}

.navbar-toggler:focus {
  -webkit-box-shadow: none;
  box-shadow: none;
}

.navbar-toggler .toggler-icon {
  width: 30px;
  height: 2px;
  background-color: #fff;
  display: block;
  margin: 5px 0;
  position: relative;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.navbar-toggler.active .toggler-icon:nth-of-type(1) {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  top: 7px;
}

.navbar-toggler.active .toggler-icon:nth-of-type(2) {
  opacity: 0;
}

.navbar-toggler.active .toggler-icon:nth-of-type(3) {
  -webkit-transform: rotate(135deg);
  transform: rotate(135deg);
  top: -7px;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .navbar-collapse {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background-color: #fff;
    z-index: 9;
    -webkit-box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
    padding: 5px 12px;
  }
}

@media (max-width: 767px) {
  .navbar-collapse {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background-color: #fff;
    z-index: 9;
    -webkit-box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
    padding: 5px 12px;
  }
}

.navbar-nav {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .navbar-nav {
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }
}

@media (max-width: 767px) {
  .navbar-nav {
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }
}

.navbar-nav .nav-item {
  position: relative;
  margin-right: 40px;
}

.navbar-nav .nav-item:last-child {
  margin-right: 0;
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .navbar-nav .nav-item {
    margin-right: 30px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .navbar-nav .nav-item {
    margin: 0;
  }
}

@media (max-width: 767px) {
  .navbar-nav .nav-item {
    margin: 0;
  }
}

.navbar-nav .nav-item a {
  font-weight: 400;
  font-size: 16px;
  color: #fff;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .navbar-nav .nav-item a {
    display: block;
    padding: 8px 0;
    color: #283747;
  }
}

@media (max-width: 767px) {
  .navbar-nav .nav-item a {
    display: block;
    padding: 6px 0;
    color: #283747;
  }
}

.navbar-nav .nav-item a.active, .navbar-nav .nav-item a:hover {
  color: #F2A92C;
}

.navbar-nav .nav-item a.header-btn {
  padding: 12px 28px;
  border-radius: 30px;
  background: #F2A92C;
  color: #fff;
  display: inline-block;
}

.navbar-nav .nav-item:hover .sub-menu {
  top: 100%;
  opacity: 1;
  visibility: visible;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .navbar-nav .nav-item:hover .sub-menu {
    top: 0;
  }
}

@media (max-width: 767px) {
  .navbar-nav .nav-item:hover .sub-menu {
    top: 0;
  }
}

.navbar-nav .nav-item .sub-menu {
  width: 200px;
  background-color: #747E88;
  -webkit-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
  position: absolute;
  top: 110%;
  left: 0;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .navbar-nav .nav-item .sub-menu {
    position: relative;
    width: 100%;
    top: 0;
    display: none;
    opacity: 1;
    visibility: visible;
  }
}

@media (max-width: 767px) {
  .navbar-nav .nav-item .sub-menu {
    position: relative;
    width: 100%;
    top: 0;
    display: none;
    opacity: 1;
    visibility: visible;
  }
}

.navbar-nav .nav-item .sub-menu li {
  display: block;
}

.navbar-nav .nav-item .sub-menu li a {
  display: block;
  padding: 8px 20px;
  color: #747E88;
}

.navbar-nav .nav-item .sub-menu li a.active, .navbar-nav .nav-item .sub-menu li a:hover {
  padding-left: 25px;
  color: #F2A92C;
}

.navbar-nav .sub-nav-toggler {
  display: none;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .navbar-nav .sub-nav-toggler {
    display: block;
    position: absolute;
    right: 0;
    top: 0;
    background: none;
    color: #222;
    font-size: 18px;
    border: 0;
    width: 30px;
    height: 30px;
  }
}

@media (max-width: 767px) {
  .navbar-nav .sub-nav-toggler {
    display: block;
    position: absolute;
    right: 0;
    top: 0;
    background: none;
    color: #222;
    font-size: 18px;
    border: 0;
    width: 30px;
    height: 30px;
  }
}

.navbar-nav .sub-nav-toggler span {
  width: 8px;
  height: 8px;
  border-left: 1px solid #222;
  border-bottom: 1px solid #222;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  position: relative;
  top: -5px;
}

.sticky .navbar-toggler .toggler-icon {
  background-color: #283747;
}

.sticky .navbar-nav .nav-item a {
  color: #283747;
}

.sticky .navbar-nav .nav-item a::before {
  background-color: #F2A92C;
}

.sticky .navbar-nav .nav-item a.active, .sticky .navbar-nav .nav-item a:hover {
  color: #F2A92C;
}

.sticky .navbar-nav .nav-item a.header-btn {
  color: #fff;
}

/*============================
hero area css
============================= */
.hero-area {
  background-image: url("../images/hero-bg.jpg");
  position: relative;
  z-index: 1;
  padding: 280px 0 320px;
}

@media only screen and (min-width: 1400px) {
  .hero-area {
    padding: 200px 0;
  }
}

@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .hero-area {
    padding: 200px 0px;
  }
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .hero-area {
    padding: 220px 0px 180px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .hero-area {
    padding: 220px 0px 180px;
  }
}

@media (max-width: 767px) {
  .hero-area {
    padding: 220px 0px 180px;
  }
}

.hero-area::after {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(40, 55, 71, 0.97);
  z-index: -1;
}

.hero-area .hero-content h2 {
  font-size: 55px;
  font-weight: 700;
  line-height: 65px;
  color: #fff;
}

@media (max-width: 767px) {
  .hero-area .hero-content h2 {
    font-size: 42px;
    line-height: 52px;
  }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
  .hero-area .hero-content h2 {
    font-size: 55px;
    line-height: 65px;
  }
}

.hero-area .hero-content p {
  font-size: 18px;
  line-height: 28px;
  color: #fff;
  margin-bottom: 35px;
}

.hero-area .hero-content a.main-btn {
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.hero-area .hero-content a.main-btn:hover {
  background: #F2A92C;
  color: #fff;
}

.hero-area .hero-left {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 50%;
  height:80%;
  z-index: 1;
}

@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .hero-area .hero-left {
    width: 45%;
  }
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .hero-area .hero-left {
    display: none;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .hero-area .hero-left {
    display: none;
  }
}

@media (max-width: 767px) {
  .hero-area .hero-left {
    display: none;
  }
}

.hero-area .hero-left .shape {
  position: absolute;
  right: -40px;
  bottom: -40px;
  z-index: -1;
}

/*============================
skill css
============================= */
.skill-area {
  position: relative;
  z-index: 1;
}

.skill-area .single-skill {
  padding: 35px 30px;
  border-radius: 8px;
  background: #fff;
  position: relative;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
  overflow: hidden;
  text-align: center;
  margin-bottom: 30px;
  -webkit-box-shadow: 0px 0px 30px rgba(229, 229, 229, 0.35);
  box-shadow: 0px 0px 30px rgba(229, 229, 229, 0.35);
}

.skill-area .single-skill:hover {
  -webkit-box-shadow: 0px 15px 61px rgba(229, 229, 229, 0.8);
  box-shadow: 0px 15px 61px rgba(229, 229, 229, 0.8);
}

.skill-area .single-skill .skill-icon {
  width: 87px;
  height: 87px;
  background: #fff;
  border-radius: 50%;
  margin: auto;
  margin-bottom: 30px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-shadow: 0px 4px 33px rgba(229, 229, 229, 0.68);
  box-shadow: 0px 4px 33px rgba(229, 229, 229, 0.68);
}

.skill-area .single-skill .skill-icon i {
  font-size: 40px;
  color: #283747;
}

.skill-area .single-skill .skill-content h4 {
  font-weight: 500;
  font-size: 25px;
  line-height: 35px;
  margin-bottom: 25px;
  min-height:200px;
}

.skill-area .single-skill .skill-content p {
  font-weight: 300;
  line-height: 24px;
  font-size: 16px;
}

/*============================
course css
============================= */
.course-area .single-course {
  border-radius: 10px;
  background: #fff;
  -webkit-box-shadow: 0px 0px 61px rgba(229, 229, 229, 0.35);
  box-shadow: 0px 0px 61px rgba(229, 229, 229, 0.35);
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
  overflow: hidden;
  margin-bottom: 30px;
}

.course-area .single-course:hover {
  -webkit-box-shadow: 0px 15px 61px rgba(229, 229, 229, 0.8);
  box-shadow: 0px 15px 61px rgba(229, 229, 229, 0.8);
}

.course-area .single-course:hover .course-img a img {
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
}

.course-area .single-course .course-img {
  overflow: hidden;
}

.course-area .single-course .course-img a {
  display: block;
}

.course-area .single-course .course-img a img {
  width: 100%;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.course-area .single-course .course-info {
  padding: 30px 28px;
}

.course-area .single-course .course-info h4 a {
  font-size: 24px;
  font-weight: 500;
  line-height: 32px;
  margin-bottom: 30px;
}

.course-area .single-course .course-info h4 a:hover {
  color: #F2A92C;
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .course-area .single-course .course-info h4 a {
    font-size: 18px;
    line-height: 26px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .course-area .single-course .course-info h4 a {
    font-size: 20px;
    line-height: 28px;
  }
}

@media (max-width: 767px) {
  .course-area .single-course .course-info h4 a {
    font-size: 20px;
    line-height: 28px;
  }
}

.course-area .single-course .course-info .course-meta {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.course-area .single-course .course-info .course-meta .meta-item {
  margin-bottom: 8px;
}

.course-area .single-course .course-info .course-meta .meta-item i {
  font-size: 13px;
  color: #283747;
  width: 28px;
  height: 28px;
  line-height: 26px;
  border: 1px solid #D6D6D6;
  border-radius: 50%;
  margin-right: 10px;
  text-align: center;
}

.course-area .single-course .course-info .course-meta .meta-item span {
  font-size: 14px;
  color: #283747;
  margin-right: 10px;
}

.course-area .single-course .course-info .course-meta .price span {
  font-size: 16px;
  font-weight: 500;
  color: #F2A92C;
}

.course-area .course-pagination .pagination li a {
  width: 35px;
  height: 35px;
  border-radius: 50%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin: 0 10px;
  background: #fff;
  color: #283747;
  border-color: #F2A92C;
}

.course-area .course-pagination .pagination li a:hover {
  color: #fff;
  background: #F2A92C;
}

.course-area .single-course-wrapper .course-img img {
  width: 100%;
  border-radius: 10px;
}

.course-area .course-included ul li {
  line-height: 1.8;
}

.course-area .course-included ul li i {
  color: #F2A92C;
  margin-right: 10px;
  font-weight: 700;
}

.course-area .course-content .single-accordion {
  margin-bottom: 15px;
  border: 1px solid rgba(214, 214, 214, 0.3);
  border-radius: 4px;
}

.course-area .course-content .single-accordion .accordion-btn button {
  padding: 15px 20px;
  padding-right: 36px;
  border: none;
  background: none;
  font-weight: 500;
  color: #283747;
  position: relative;
}

.course-area .course-content .single-accordion .accordion-btn button::after {
  content: "\ea58";
  font: normal normal normal 1em/1 "LineIcons";
  position: absolute;
  right: 20px;
  top: 18px;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.course-area .course-content .single-accordion .accordion-btn button.collapsed::after {
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
}

.course-area .course-content .single-accordion .accordion-content {
  padding: 10px 20px 30px;
}

.course-area .right-sidebar .course-info {
  background: #f5f5f5;
  padding: 50px 30px;
  border-radius: 4px;
}

.course-area .right-sidebar .course-info ul li {
  font-size: 14px;
  padding: 20px 0;
  border-bottom: 1px solid rgba(214, 214, 214, 0.5);
}

.course-area .right-sidebar .course-info ul li span.text-right {
  color: #283747;
}

.course-area .right-sidebar .course-info ul li span.text-right a {
  color: inherit;
}

.course-area .right-sidebar .course-info ul li span.text-right a:hover {
  color: #F2A92C;
}

.course-area .right-sidebar .course-info .main-btn {
  background: #F2A92C;
  color: #fff;
  border-radius: 4px;
  text-transform: uppercase;
}

.course-area .right-sidebar .course-category ul li {
  padding: 15px 0;
  border-bottom: 1px solid #f5f5f5;
}

.course-area .right-sidebar .course-category ul li a {
  color: #747E88;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.course-area .right-sidebar .course-category ul li a:hover {
  color: #F2A92C;
}

.course-area .right-sidebar .course-category ul li a i {
  color: #F2A92C;
  font-size: 12px;
}

.view-all-btn a {
  font-size: 16px;
  font-weight: 500;
  padding: 16px 36px;
  border: 2px solid #F2A92C;
  color: #283747;
}


/*============================
welcome css
============================= */
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .welcome-area .welcome-content {
    margin-bottom: 50px;
  }
}

@media (max-width: 767px) {
  .welcome-area .welcome-content {
    margin-bottom: 50px;
  }
}

.welcome-area .welcome-content .content a {
  font-size: 18px;
  color: #F2A92C;
  line-height: 2;
  border-bottom: 1.5px solid #F2A92C;
}

.welcome-area .welcome-content .content a i {
  display: inline-block;
  padding-left: 5px;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.welcome-area .welcome-content .content a:hover i {
  padding-left: 20px;
}

/*============================
categories css
============================= */
.single-category{
  min-height:450px ;
}
.categories-area .category-wrapper .single-category {
  padding: 50px 15px;
  margin-bottom: 30px;
  text-align: center;
  border-radius: 10px;
  background: #fff;
  -webkit-box-shadow: 0px 0px 50px rgba(229, 229, 229, 0.35);
  box-shadow: 0px 0px 50px rgba(229, 229, 229, 0.35);
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.categories-area .category-wrapper .single-category:hover {
  -webkit-box-shadow: 0px 15px 50px rgba(229, 229, 229, 0.8);
  box-shadow: 0px 15px 50px rgba(229, 229, 229, 0.8);
}

.categories-area .category-wrapper .single-category i {
  font-size: 40px;
  color: #283747;
  margin-bottom: 30px;
}

.categories-area .category-wrapper .single-category h3 {
  font-size: 30px;
  font-weight: 500;
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .categories-area .category-wrapper .single-category h3 {
    font-size: 24px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .categories-area .category-wrapper .single-category h3 {
    font-size: 24px;
  }
}

@media (max-width: 767px) {
  .categories-area .category-wrapper .single-category h3 {
    font-size: 20px;
  }
}

/*============================
blog css
============================= */
.blog-area .single-blog {
  overflow: hidden;
  border-radius: 10px;
  margin-bottom: 30px;
  background: #fff;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
  -webkit-box-shadow: 0px 0px 61px rgba(229, 229, 229, 0.35);
  box-shadow: 0px 0px 61px rgba(229, 229, 229, 0.35);
}

.blog-area .single-blog:hover {
  -webkit-box-shadow: 0px 15px 61px rgba(229, 229, 229, 0.7);
  box-shadow: 0px 15px 61px rgba(229, 229, 229, 0.7);
}

.blog-area .single-blog:hover .blog-img a img {
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
}

.blog-area .single-blog .blog-img {
  overflow: hidden;
}

.blog-area .single-blog .blog-img a img {
  width: 100%;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.blog-area .single-blog .blog-content {
  padding: 30px 25px;
  min-height:300px;
}

.blog-area .single-blog .blog-content h4 a {
  font-size: 24px;
  line-height: 32px;
  font-weight: 500;
  margin-bottom: 15px;
}

.blog-area .single-blog .blog-content h4 a:hover {
  color: #F2A92C;
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .blog-area .single-blog .blog-content h4 a {
    font-size: 18px;
    line-height: 26px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .blog-area .single-blog .blog-content h4 a {
    font-size: 20px;
    line-height: 28px;
  }
}

@media (max-width: 767px) {
  .blog-area .single-blog .blog-content h4 a {
    font-size: 20px;
    line-height: 28px;
  }
}

/*============================
contact css
============================= */
.contact-area {
  background: #FBFBFB;
  padding: 120px 0;
  position: relative;
  z-index: 1;
}

.contact-area .map-bg {
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 0;
  text-align: center;
  z-index: -1;
}

.contact-area .contact-content h2 {
  font-size: 40px;
  font-weight: 500;
  margin-bottom: 35px;
}

.contact-area .contact-content p {
  margin-bottom: 35px;
  padding-right: 30px;
}

.contact-area .contact-content h3 {
  font-size: 30px;
  margin-bottom: 20px;
  font-weight: 500;
}

.contact-area .contact-content h4 a {
  font-size: 25px;
  font-weight: 500;
  margin-bottom: 20px;
}

.contact-area .contact-form-wrapper form input, .contact-area .contact-form-wrapper form textarea {
  padding: 16px 20px;
  border: 1px solid #D6D6D6;
  border-radius: 5px;
  margin-bottom: 20px;
  font-size: 16px;
  color: #747E88;
}

.contact-area .contact-form-wrapper form input::-webkit-input-placeholder, .contact-area .contact-form-wrapper form textarea::-webkit-input-placeholder {
  opacity: 1;
}

.contact-area .contact-form-wrapper form input:-ms-input-placeholder, .contact-area .contact-form-wrapper form textarea:-ms-input-placeholder {
  opacity: 1;
}

.contact-area .contact-form-wrapper form input::-ms-input-placeholder, .contact-area .contact-form-wrapper form textarea::-ms-input-placeholder {
  opacity: 1;
}

.contact-area .contact-form-wrapper form input::placeholder, .contact-area .contact-form-wrapper form textarea::placeholder {
  opacity: 1;
}

.contact-area .contact-form-wrapper form input:focus, .contact-area .contact-form-wrapper form textarea:focus {
  border-color: #F2A92C;
}

.contact-area .contact-form-wrapper form button {
  padding: 16px 40px;
  border-radius: 5px;
  background: #F2A92C;
  color: #fff;
}

.page-banner {
  position: relative;
  z-index: 1;
}

.page-banner::after {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.5);
  z-index: -1;
}

.page-banner .banner-content .breadcrumb {
  background: none;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.page-banner .banner-content .breadcrumb li {
  color: #F2A92C;
}

.page-banner .banner-content .breadcrumb li::before {
  color: #fff;
}

.page-banner .banner-content .breadcrumb li a {
  color: #fff;
}

.page-banner .banner-content .breadcrumb li a:hover {
  color: #F2A92C;
}

/*============================
footer css
============================= */
.footer-area .footer-widget {
  margin-bottom: 55px;
}

.footer-area .footer-widget .logo {
  margin-bottom: 20px;
}

.footer-area .footer-widget h5 {
  font-size: 20px;
  font-weight: 500;
  margin-bottom: 35px;
}

.footer-area .footer-widget ul li a {
  font-size: 16px;
  line-height: 35px;
  color: #747E88;
}

.footer-area .footer-widget ul li a:hover {
  color: #F2A92C;
}

.footer-area .footer-widget ul li p {
  font-size: 16px;
  line-height: 35px;
  color: #747E88;
}

.footer-area .footer-credit {
  padding: 35px 0;
  border-top: 1px solid #D6D6D6;
}

@media (max-width: 767px) {
  .footer-area .footer-credit .copy-right {
    margin-bottom: 20px;
  }
}

.footer-area .footer-credit .copy-right p {
  font-weight: 300;
}

.footer-area .footer-credit .copy-right p a {
  color: inherit;
}

.footer-area .footer-credit .footer-social ul li {
  margin: 0 15px;
}

.footer-area .footer-credit .footer-social ul li:last-child {
  margin-right: 0;
}

.footer-area .footer-credit .footer-social ul li a {
  color: #747E88;
  display: block;
}

.footer-area .footer-credit .footer-social ul li a:hover {
  color: #F2A92C;
}
/*# sourceMappingURL=style.css.map */
</style>