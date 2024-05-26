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
							<img src="	https://w.ladicdn.com/s1550x750/5c3219ef974b7861952fed1d/banner-20220808090753.png" alt="">
						</div>
						<div class="content">
							<p class="mb-35 wow fadeInUp" data-wow-delay=".4s">Nhưng một vài tháng nay, khung cảnh trường học đã khác, buổi trưa đã không còn trống trải mà đầy ắp những tiếng nói cười và hình ảnh những đứa trẻ ăn những bữa ăn với khuôn mặt hạnh phúc. Đó nhờ vào sức mạnh mà dự án Nuôi em mang lại - sức mạnh của bữa ăn 8500. Tất cả các em học sinh được nuôi cơm trưa từ thứ hai tới thứ sáu. </p>
							<div class="read-more" style="display: none;">
								<img src="	https://w.ladicdn.com/s900x700/5c3219ef974b7861952fed1d/sgagwehw-20220808091422.png" alt="">
								<p>Các bé vùng cao Tây Bắc xa xôi, hẻo lánh để đến với “con chữ” có rất nhiều khó khăn, gian khổ. Chỉ vì để được đến trường học tập với thầy cô và các bạn, các em bé ấy không ngại những quãng đường xa xôi hàng km hay thức dậy rất sớm để được cắp sách đếntrường.</p>
							</div>
							<div class="fb-share-button" data-href="https://b60e-116-106-111-83.ngrok-free.app" data-layout="" data-size=""><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fb60e-116-106-111-83.ngrok-free.app%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
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
<style>
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
</style>