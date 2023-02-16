> *Day 16/02/2023*

> *Make by k@iser*

> *Task 3: User-Agent, Cookie, Sitemap*	

> *Mentor: anh Đức - DucNQ*

# UserAgent, Cookie, Sitemap 

#### Mục lục 
-	[1. User-Agent](#UserAgent) 
	-	[1.1. Nhận dạng](#Nhận-dạng)
	-	[1.2. Cấu trúc](#Cấu-trúc)
	-	[1.3. Chức năng](#Chức-năng)
	-	[1.4. Kiểm tra UserAgent](#Kiểm-tra-UserAgent)
	-	[1.5. Cách chỉnh sửa UA qua Extension](#Cách-chỉnh-sửa-UA-qua-Extension) 
-	[2. Sitemap](#Sitemap) 
	-	[2.1. Cách tạo](#Cách-tạo)
-	[3. Cookie](#Cookie) 
	-	[3.1. Lợi ích](#Lợi-ích)
	-	[3.2. Rủi ro](#Rủi-ro)
	-	[3.3. Phân loại ](#Phân-loại )
	-	[3.4. Ứng dụng ](#Ứng-dụng )
	-	[3.5. Quyền riêng tư](#Quyền-riêng-tư)
	-	[3.6. Cách thay đổi Cookie](#Cách-thay-đổi-Cookie)

## UserAgent

**User Agent** (**đại diện người dùng - tác nhân người dùng**) là bất kỳ phần mềm nào hoạt động thay mặt cho người dùng. Sử dụng phổ biến trong web browser nhằm mục đích cho trang web biết thông tin về trình duyệt và hệ điều hành,... Điều này cho phép trang web điều chỉnh nội dung theo khả năng của một thiết bị cụ thể nhưng cũng gây ra vấn đề riêng tư. 

Một ví dụ điển hình khác là trình đọc mail,... 
### Nhận dạng

Khi hoạt động trong 1 giao thức mạng, một phần mềm Agent thường xác định bằng chính *loại ứng dung, hệ điều hành, kiểu thiết bị, nhà cung cấp phần mềm hoặc bản sửa lỗi phần mềm* mà nó đang chạy trên. Thông tin nhận dạng được gửi đi thông qua trường User-Agent ở Header. 

### Cấu trúc
Hầu hết, chuỗi User-Agent có cấu trúc  như sau:

`Mozilla/[phiên bản]([thông tin hệ thống và trình duyệt])[nền tảng]([chi tiết nền tảng])[tiện ích mở rộng]`

Ví dụ:  Safari trên iPad đã sử dụng như sau:

`Mozilla/5.0 (iPad; U; CPU OS 3_2_1 như Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, như Gecko) Mobile/7B405`

Trong đó:
-   _Mozilla/5.0_ : Trước đây được sử dụng để biểu thị khả năng tương thích với công cụ kết xuất Mozilla.
-   _(iPad; U; CPU OS 3_2_1 like Mac OS X; en-us)_ : Chi tiết về hệ thống mà trình duyệt đang chạy.
-   _AppleWebKit/531.21.10_ : Nền tảng mà trình duyệt sử dụng.
-   _(KHTML, như Gecko)_ : Chi tiết về nền tảng trình duyệt.
-     Mobile/7B405: để chỉ ra các cải tiến cụ thể có sẵn trực tiếp trong trình duyệt hoặc thông qua các bên thứ ba. Một ví dụ về điều này là Cuộc họp trực tiếp của Microsoft đăng ký tiện ích mở rộng để dịch vụ Cuộc họp trực tiếp biết liệu phần mềm đã được cài đặt hay chưa, điều đó có nghĩa là phần mềm có thể cung cấp trải nghiệm hợp lý khi tham gia cuộc họp.

**Đối với Bots**: Chuỗi thường được đơn giản hóa, chỉ còn trường quan trọng là thông tin liên hệ trong trường hợp sự cố. Ví dụ `Googlebot/2.1 (+http://www.google.com/bot.html)`.

### Chức năng

Chuỗi User-Agent thường được sử dụng để xác định nội dung trong HTTP. Ví dụ với tham số "hệ điều hành", Webserver có thể lựa chọn nội dung, điều chỉnh giao diện dựa trên những gì đã biết về "hệ điều hành" để gửi trong gói tin *respone*. 

Tuy nhiên, chuỗi **User-Agent** cũng như những **HTTP Header** khác, nó có thể **bị thay đổi** trước khi được gửi đến máy chủ.

### Kiểm tra UserAgent
Có thể xem User Agent hiện tại thông qua một số trang web trực tuyến như: 
- http://my-user-agent.com/
- https://www.whatismyip.com/user-agent/
- ...
- Hoặc thông qua việc bắt gói tin *request* để kiểm tra tham số User-Agent* ở *HTTP Header*

### Cách chỉnh sửa UA qua Extension
Một số Extension dùng để chỉnh sửa UA bao gồm:
- [User-Agent Switcher for Chrome](https://chrome.google.com/webstore/detail/user-agent-switcher-for-c/djflhoibgkdhkhhcedjiklpkjnoahfmg?hl=vi)
<img src="https://github.com/bce-thefirst/HPT_Intern/blob/main/User-Agent%2C%20Sitemap%2C%20Cookie/img/user-agent%20switcher.JPG" alt="ahihi :))" width="600" height="440">
- [User-Agent Switcher and Manager](https://chrome.google.com/webstore/detail/user-agent-switcher-and-m/bhchdcejhohfmigjafbampogmaanbfkg?hl=vi)
<img src="https://github.com/bce-thefirst/HPT_Intern/blob/main/User-Agent%2C%20Sitemap%2C%20Cookie/img/ua%20switcher%20and%20manager.JPG" alt="ahihi :))" width="600" height="440">
- ...

Hoặc có thể bắt gói *request* rồi chỉnh sửa tham số UA.

## Sitemap
Sitemap là thuật ngữ chỉ sơ đồ website giúp quá trình thu thập của công cụ tìm kiếm điều hướng trang tốt hơn. Cụ thể sitemap là một tập tin văn bản có chứa tất cả các URL của website dẫn đến trang chính, trang con được thể hiện một cách chi tiết, rõ ràng, chính xác. 

### Cách tạo

GỬI SITEMAP LÊN GOOGLE WEBMASTERS TOOL:

Truy cập vào địa chỉ  [http://www.google.com.vn/webmasters/](https://www.google.com.vn/webmasters/) và đăng nhập vào bằng tài khoản Google hoặc Gmail.

Thêm website vào Google Webmaster Tools
[Thêm website vào Google Webmaster Tools](link anh 1)

Nhập địa chỉ website vào và ấn Tiếp tục.
[Nhập địa chỉ website vào và ấn Tiếp tục](link anh 2)

Tải file xác nhận về máy tính.
[Tải tập tin xác nhận website](link anh 3)

Tải tập tin xác nhận website và upload nó lên thư mục gốc của website.
[Upload tập tin xác nhận lên thư mục gốc của website](link anh 4)

Upload tập tin xác nhận lên thư mục gốc của website.
Cuối cùng là quay lại trang Google Webmaster Tools và ấn nút Xác minh.

[Xác-minh-website-thành-công](linkanh5)
Xác minh website thành công

Cứ ấn Tiếp tục.

Bây giờ bạn cần vào phần Sơ đồ trang web (Sitemap).

[submit-sitemap-google-6](6)

Và nhập tên tập tin sitemap.
[yoastseo-submit-sitemap](7)

Kết quả nè:


## Cookie
Cookie là những tập tin được lưu lại thông qua trình duyệt khi người dùng truy cập vào Website. 

Được dùng với mục đích phổ biến nhất là để lưu trữ phiên đăng nhập nhằm xác thực với Website, duy trì trạng thái đăng nhập. 

Ngoài ra còn được dùng để lưu trữ thông tin trạng thái (quốc gia, ngôn ngữ,...), ghi nhớ hoạt động người dùng thực hiện trong quá trình truy cập và duyệt một trang web(những nút bấm hay đường liên kết mà người dùng tương tác). Cookie cũng được dùng để lưu các thông tin mà người dùng nhập hoặc điền vào trang web như tên, địa chỉ, email,...
### Lợi ích
Trong các web thương mại, có thể theo dõi khách hàng và lưu các giao dịch của họ khi họ chuyển site, giỏ hàng,... 

Trong doanh nghiệp, lấy thông tin của người dùng đang truy cập web như: thời gian, thời điểm truy cập,... Điều chỉnh, cung cấp quảng cáo.

### Rủi ro

Ảnh hưởng đến sự riêng tư của user, rò ri thông tin cá nhân,...

### Phân loại 

**Session cookie**: chỉ tồn tại trong bộ nhớ tạm thời khi người dùng duyệt web. Nó cho phép chuyển tới một trang mới mà không cần đăng nhập lại. Được sử dụng rộng rãi ở những trang web thương mại. Thông thường, trình duyệt sẽ xóa bỏ cookie khi người dùng ngưng phiên duyệt web. Không như các loại cookie khác, session cookie không có thời hạn có hiệu lực. Đó cũng là yếu tố để trình duyệt phân biệt session cookie và các loại cookie khác.

**Persistent cookie**: Không như session cookie, được lưu trữ trên ổ cứng của máy tính và không bị xóa khi trình duyệt đóng lại. Những cookie này có thể thiết lập những sở thích của bạn đối với mỗi trang web cụ thể khi bạn quay lại, cho phép những ưu đãi sẽ được sử dụng trong những lần trình duyệt tiếp theo.

**Secure cookie**: chỉ có thể được gửi và nhận qua một kết nối được mã hoá.

**HTTP-only cookie**:không được truy cập bởi các giao diện lập trình ứng dụng (API) phía người dùng (client-side APIs). => Chống đánh cắp cookie.

**Same-site cookie**: là loại cookie chỉ được gửi qua các yêu cầu xuất phát cùng một tên miền mục tiêu. 

**Third-party cookie**: Thuộc một tên miền khác với tên miền trên thanh địa chỉ, cho phép các công ty tiếp thị hoặc quảng cáo.

**Supercookie**: là loại cookie xuất phát từ các tên miền ở tầng cao nhất (ví dụ như.com) hay các hậu tố công cộng (public suffix) như: .co,.uk,... Supercookie có thể là một mối nguy hiểm tiềm tàng vì các supercookie có thể được dùng để nguỵ trang một yêu cầu không hợp pháp trông như một yêu cầu hợp pháp từ người dùng.

**Zombie cookie**: là loại bị xoá đi.

### Ứng dụng 
Dùng để quản lý phiên chạy web, theo dõi hoạt động người dùng và cá nhân hóa trải nghiệm của họ.

### Quyền riêng tư
Các công ty quảng cáo sử dụng third-party cookie để theo dõi hoạt động của người dùng từ nhiều trang web khác nhau. Từ đó giúp các doanh nghiệp có thể thực hiện các chiến dịch quảng cáo theo đối tượng.

### Cách thay đổi Cookie
Một số Extension dùng để chỉnh sửa Cookie bao gồm:
- [CookieManager - Cookie Editor](https://chrome.google.com/webstore/detail/cookiemanager-cookie-edit/hdhngoamekjhmnpenphenpaiindoinpo)
- [EditThisCookie](https://chrome.google.com/webstore/detail/editthiscookie/fngmhnnpilhplaeedifhccceomclgfbg?hl=vi)
- ...
Hoặc có thể bắt gói *request* rồi chỉnh sửa Cookie.

***
//Make by #k@iser