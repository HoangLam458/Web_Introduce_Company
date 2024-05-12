<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            'name' => 'Xây dựng nhà ở',
            'description'=> '<p style="text-align:center"><u><strong><span style="font-size:20px">M&Ocirc; TẢ DỰ &Aacute;N</span></strong></u></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>1. Tiền đề v&agrave; kế hoạch ban đầu:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Nghi&ecirc;n cứu thị trường:</strong> C&ocirc;ng ty sẽ tiến h&agrave;nh nghi&ecirc;n cứu thị trường để đ&aacute;nh gi&aacute; nhu cầu v&agrave; khả năng ti&ecirc;u thụ của dự &aacute;n nh&agrave; ở trong khu vực cụ thể.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Đ&aacute;nh gi&aacute; khả năng t&agrave;i ch&iacute;nh:</strong> X&aacute;c định nguồn vốn cần thiết cho dự &aacute;n v&agrave; đ&aacute;nh gi&aacute; khả năng t&agrave;i ch&iacute;nh của c&ocirc;ng ty để triển khai.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>2. Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Thiết kế kiến tr&uacute;c:</strong> Thu&ecirc; kiến <span style="font-family:&quot;Arial&quot;,sans-serif">​​</span>tr&uacute;c sư để thiết kế c&aacute;c mẫu nh&agrave; ở ph&ugrave; hợp với nhu cầu của thị trường v&agrave; y&ecirc;u cầu của kh&aacute;ch h&agrave;ng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Thiết kế kỹ thuật:</strong> C&aacute;c kỹ sư sẽ thiết kế c&aacute;c hệ thống cơ điện, cấu tr&uacute;c v&agrave; c&aacute;c yếu tố kỹ thuật kh&aacute;c của dự &aacute;n.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>3. Ph&ecirc; duyệt v&agrave; giấy ph&eacute;p:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Nộp hồ sơ v&agrave; đợi ph&ecirc; duyệt:</strong> Nộp c&aacute;c t&agrave;i liệu thiết kế cho c&aacute;c cơ quan chức năng để đợi được ph&ecirc; duyệt về quy hoạch v&agrave; x&acirc;y dựng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Nhận giấy ph&eacute;p x&acirc;y dựng:</strong> Sau khi c&aacute;c t&agrave;i liệu được ph&ecirc; duyệt, c&ocirc;ng ty sẽ nhận giấy ph&eacute;p x&acirc;y dựng ch&iacute;nh thức để bắt đầu c&ocirc;ng việc x&acirc;y dựng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>4. X&acirc;y dựng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Chuẩn bị c&ocirc;ng trường:</strong> Lập kế hoạch v&agrave; chuẩn bị c&ocirc;ng trường bao gồm l&agrave;m sạch, san lấp, v&agrave; thiết lập c&aacute;c cơ sở cần thiết.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>X&acirc;y dựng cơ sở v&agrave; cấu tr&uacute;c:</strong> Bắt đầu x&acirc;y dựng c&aacute;c hạng mục cơ sở v&agrave; cấu tr&uacute;c như m&oacute;ng, tường, s&agrave;n, v&agrave; m&aacute;i.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Ho&agrave;n thiện nội thất v&agrave; ngoại thất:</strong> Thực hiện việc lắp đặt c&aacute;c thiết bị nội thất v&agrave; ho&agrave;n thiện c&aacute;c c&ocirc;ng việc ngoại thất như sơn, l&aacute;t gạch, v&agrave; trang tr&iacute;.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>5. Kiểm tra v&agrave; b&agrave;n giao:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Kiểm tra chất lượng:</strong> Thực hiện kiểm tra chất lượng định kỳ để đảm bảo rằng dự &aacute;n đ&aacute;p ứng c&aacute;c ti&ecirc;u chuẩn chất lượng v&agrave; an to&agrave;n.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>B&agrave;n giao:</strong> Sau khi ho&agrave;n th&agrave;nh, dự &aacute;n sẽ được b&agrave;n giao cho chủ đầu tư hoặc kh&aacute;ch h&agrave;ng theo thỏa thuận trong hợp đồng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>6. Duy tr&igrave; v&agrave; bảo dưỡng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Duy tr&igrave; sau b&agrave;n giao:</strong> Cung cấp dịch vụ duy tr&igrave; v&agrave; bảo dưỡng cho dự &aacute;n nhằm đảm bảo rằng c&aacute;c t&agrave;i sản được bảo quản v&agrave; sử dụng hiệu quả sau khi đ&atilde; ho&agrave;n th&agrave;nh.</span></span></li>
            </ul>
            ',
            'status' => 1
        ]);
        DB::table('projects')->insert([
            'name' => 'Xây dựng công trình công nghiệp và thương mại',
            'description'=> '<p style="text-align:center"><span style="font-size:20px"><strong><u>M&Ocirc; TẢ DỰ &Aacute;N</u></strong></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>1. Tiền đề v&agrave; kế hoạch ban đầu:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Nghi&ecirc;n cứu thị trường v&agrave; địa điểm:</strong> X&aacute;c định nhu cầu thị trường v&agrave; đ&aacute;nh gi&aacute; vị tr&iacute; ph&ugrave; hợp cho dự &aacute;n c&ocirc;ng nghiệp hoặc thương mại.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Ph&acirc;n t&iacute;ch khả thi:</strong> Tiến h&agrave;nh ph&acirc;n t&iacute;ch khả thi kinh tế, kỹ thuật v&agrave; m&ocirc;i trường để đảm bảo dự &aacute;n c&oacute; thể thực hiện được v&agrave; c&oacute; lợi nhuận.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>2. Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Thiết kế kiến tr&uacute;c v&agrave; kỹ thuật:</strong> Hợp t&aacute;c với c&aacute;c kiến tr&uacute;c sư v&agrave; kỹ sư để thiết kế c&aacute;c c&ocirc;ng tr&igrave;nh c&ocirc;ng nghiệp v&agrave; thương mại với c&aacute;c yếu tố đặc biệt như cơ sở hạ tầng, hệ thống cơ điện, v&agrave; an to&agrave;n lao động.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>3. Ph&ecirc; duyệt v&agrave; giấy ph&eacute;p:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Nộp hồ sơ v&agrave; đợi ph&ecirc; duyệt:</strong> Chuẩn bị v&agrave; nộp hồ sơ cho c&aacute;c cơ quan chức năng để đợi được ph&ecirc; duyệt về quy hoạch v&agrave; x&acirc;y dựng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Nhận giấy ph&eacute;p x&acirc;y dựng:</strong> Sau khi c&aacute;c t&agrave;i liệu được ph&ecirc; duyệt, c&ocirc;ng ty sẽ nhận giấy ph&eacute;p x&acirc;y dựng ch&iacute;nh thức để bắt đầu c&ocirc;ng việc x&acirc;y dựng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>4. X&acirc;y dựng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Chuẩn bị c&ocirc;ng trường v&agrave; ph&acirc;n khu:</strong> Thiết lập c&aacute;c khu vực c&ocirc;ng trường, lắp đặt c&aacute;c thiết bị v&agrave; cơ sở cần thiết để bắt đầu c&ocirc;ng việc.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>X&acirc;y dựng cơ sở v&agrave; cấu tr&uacute;c:</strong> Tiến h&agrave;nh x&acirc;y dựng cơ sở v&agrave; cấu tr&uacute;c ch&iacute;nh của dự &aacute;n, bao gồm nh&agrave; xưởng, kho h&agrave;ng, v&agrave; văn ph&ograve;ng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Lắp đặt hệ thống:</strong> C&agrave;i đặt c&aacute;c hệ thống cơ điện, hệ thống nước v&agrave; c&aacute;c thiết bị c&ocirc;ng nghiệp kh&aacute;c.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>5. Kiểm tra v&agrave; b&agrave;n giao:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Kiểm tra chất lượng:</strong> Thực hiện kiểm tra chất lượng định kỳ để đảm bảo rằng dự &aacute;n đ&aacute;p ứng c&aacute;c ti&ecirc;u chuẩn chất lượng v&agrave; an to&agrave;n.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>B&agrave;n giao:</strong> Ho&agrave;n th&agrave;nh v&agrave; b&agrave;n giao dự &aacute;n cho kh&aacute;ch h&agrave;ng hoặc chủ đầu tư theo thỏa thuận trong hợp đồng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>6. Duy tr&igrave; v&agrave; bảo dưỡng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Duy tr&igrave; sau b&agrave;n giao:</strong> Cung cấp dịch vụ duy tr&igrave; v&agrave; bảo dưỡng cho dự &aacute;n nhằm đảm bảo rằng c&aacute;c t&agrave;i sản được bảo quản v&agrave; sử dụng hiệu quả sau khi đ&atilde; ho&agrave;n th&agrave;nh.</span></span></li>
            </ul>
            ',
            'status' => 1
        ]);
        DB::table('projects')->insert([
            'name' => 'Sửa chữa và nâng cấp',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">M&Ocirc; TẢ DỰ &Aacute;N</span></span></u></strong></span></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Ph&acirc;n t&iacute;ch v&agrave; Đ&aacute;nh gi&aacute; ban đầu</strong>: Dự &aacute;n bắt đầu bằng việc ph&acirc;n t&iacute;ch t&igrave;nh trạng hiện tại của c&ocirc;ng tr&igrave;nh cần sửa chữa v&agrave; n&acirc;ng cấp. Đội ngũ kỹ sư v&agrave; kiến tr&uacute;c sư của c&ocirc;ng ty sẽ tiến h&agrave;nh kiểm tra kỹ thuật, đ&aacute;nh gi&aacute; t&igrave;nh trạng cấu tr&uacute;c v&agrave; x&aacute;c định c&aacute;c yếu tố cần phải cải thiện.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Lập kế hoạch v&agrave; thiết kế</strong>: Sau khi ph&acirc;n t&iacute;ch, một kế hoạch chi tiết sẽ được lập ra. Điều n&agrave;y bao gồm việc x&aacute;c định phạm vi c&ocirc;ng việc, lập một lịch tr&igrave;nh l&agrave;m việc v&agrave; x&aacute;c định nguồn lực cần thiết. Đồng thời, c&aacute;c kỹ sư v&agrave; kiến tr&uacute;c sư sẽ tạo ra c&aacute;c bản vẽ v&agrave; thiết kế chi tiết cho c&aacute;c phần cần sửa chữa v&agrave; n&acirc;ng cấp.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Thực hiện c&ocirc;ng việc</strong>: Sau khi kế hoạch được ph&ecirc; duyệt, c&ocirc;ng ty sẽ bắt đầu thực hiện c&aacute;c c&ocirc;ng việc sửa chữa v&agrave; n&acirc;ng cấp. Điều n&agrave;y c&oacute; thể bao gồm việc sửa chữa cấu tr&uacute;c, n&acirc;ng cấp hệ thống điện, nước, v&agrave; HVAC (hệ thống th&ocirc;ng gi&oacute;, sưởi ấm v&agrave; điều h&ograve;a kh&ocirc;ng kh&iacute;), cũng như việc cải thiện c&aacute;c t&iacute;nh năng esthetic của c&ocirc;ng tr&igrave;nh.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Kiểm tra v&agrave; kiểm so&aacute;t chất lượng</strong>: Trong suốt qu&aacute; tr&igrave;nh thực hiện, kiểm tra chất lượng sẽ được thực hiện để đảm bảo rằng c&ocirc;ng việc được thực hiện đ&uacute;ng c&aacute;ch v&agrave; đ&aacute;p ứng c&aacute;c ti&ecirc;u chuẩn. C&aacute;c biện ph&aacute;p kiểm so&aacute;t chất lượng sẽ được &aacute;p dụng để đảm bảo sự chắc chắn v&agrave; an to&agrave;n của c&ocirc;ng tr&igrave;nh.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Ho&agrave;n thiện v&agrave; b&agrave;n giao</strong>: Khi c&aacute;c c&ocirc;ng việc sửa chữa v&agrave; n&acirc;ng cấp đ&atilde; ho&agrave;n th&agrave;nh, c&ocirc;ng ty sẽ tiến h&agrave;nh kiểm tra cuối c&ugrave;ng v&agrave; ho&agrave;n thiện c&aacute;c c&ocirc;ng đoạn c&ograve;n thiếu. Sau đ&oacute;, c&ocirc;ng tr&igrave;nh sẽ được b&agrave;n giao cho chủ sở hữu, k&egrave;m theo c&aacute;c t&agrave;i liệu v&agrave; hướng dẫn vận h&agrave;nh nếu cần.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Hỗ trợ sau b&aacute;n h&agrave;ng</strong>: Sau khi dự &aacute;n ho&agrave;n th&agrave;nh, c&ocirc;ng ty sẽ tiếp tục cung cấp hỗ trợ sau b&aacute;n h&agrave;ng cho kh&aacute;ch h&agrave;ng. Điều n&agrave;y c&oacute; thể bao gồm việc bảo dưỡng định kỳ v&agrave; sửa chữa hỏng h&oacute;c sau khi b&agrave;n giao dự &aacute;n.</span></span></li>
            </ol>

            <p>&nbsp;</p>
            ',
            'status' => 1
        ]);
        DB::table('projects')->insert([
            'name' => 'Thiết kế kiến trúc',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">M&Ocirc; TẢ DỰ &Aacute;N</span></span></u></strong></span></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Phỏng vấn v&agrave; Thu thập Y&ecirc;u cầu</strong>: Đội ngũ kiến tr&uacute;c sư sẽ tổ chức cuộc phỏng vấn với kh&aacute;ch h&agrave;ng để hiểu r&otilde; y&ecirc;u cầu, mục ti&ecirc;u v&agrave; phong c&aacute;ch thiết kế mong muốn. C&aacute;c yếu tố như diện t&iacute;ch, số ph&ograve;ng, chức năng sử dụng, v&agrave; ng&acirc;n s&aacute;ch cũng sẽ được thảo luận.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Ph&acirc;n t&iacute;ch Địa điểm v&agrave; M&ocirc;i trường</strong>: Trước khi bắt đầu thiết kế, c&aacute;c kiến tr&uacute;c sư sẽ thực hiện một ph&acirc;n t&iacute;ch kỹ thuật của địa điểm, bao gồm điều kiện địa h&igrave;nh, kh&iacute; hậu, cảnh quan v&agrave; yếu tố m&ocirc;i trường kh&aacute;c. Điều n&agrave;y sẽ ảnh hưởng đến quyết định thiết kế của họ.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Lập kế hoạch v&agrave; Thiết kế Sơ bộ</strong>: Dựa tr&ecirc;n th&ocirc;ng tin thu thập được, kiến tr&uacute;c sư sẽ bắt đầu lập kế hoạch v&agrave; tạo ra c&aacute;c bản vẽ sơ bộ. Đ&acirc;y c&oacute; thể l&agrave; c&aacute;c bản vẽ tay hoặc sử dụng phần mềm thiết kế chuy&ecirc;n nghiệp như AutoCAD hoặc SketchUp.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Ph&aacute;t triển Thiết kế Chi tiết</strong>: Sau khi bản vẽ sơ bộ được ph&ecirc; duyệt, c&aacute;c kiến tr&uacute;c sư sẽ tiến h&agrave;nh ph&aacute;t triển thiết kế chi tiết hơn. Điều n&agrave;y bao gồm việc x&aacute;c định c&aacute;c vật liệu, k&iacute;ch thước cụ thể, v&agrave; c&aacute;c t&iacute;nh năng kiến tr&uacute;c như cửa sổ, cửa ra v&agrave;o, v&agrave; hệ thống sưởi ấm, l&agrave;m m&aacute;t.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Kiểm tra v&agrave; Đ&aacute;nh gi&aacute;</strong>: Khi thiết kế đ&atilde; ho&agrave;n th&agrave;nh, n&oacute; sẽ được kiểm tra v&agrave; đ&aacute;nh gi&aacute; bởi cả kiến tr&uacute;c sư v&agrave; kh&aacute;ch h&agrave;ng. C&aacute;c điều chỉnh cuối c&ugrave;ng sẽ được thực hiện dựa tr&ecirc;n phản hồi để đảm bảo rằng thiết kế đ&aacute;p ứng đ&uacute;ng nhu cầu v&agrave; y&ecirc;u cầu.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Lập Kế hoạch X&acirc;y dựng</strong>: Cuối c&ugrave;ng, sau khi thiết kế đ&atilde; được ph&ecirc; duyệt, c&ocirc;ng ty x&acirc;y dựng sẽ lập kế hoạch cho việc thi c&ocirc;ng. Điều n&agrave;y bao gồm việc x&aacute;c định nguồn lực cần thiết, lập lịch tr&igrave;nh c&ocirc;ng việc v&agrave; đảm bảo tu&acirc;n thủ c&aacute;c quy định ph&aacute;p l&yacute; v&agrave; an to&agrave;n.</span></span></li>
            </ol>

            <p>&nbsp;</p>
            ',
            'status' => 1
        ]);
        DB::table('projects')->insert([
            'name' => 'Quản lý dự án',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">M&Ocirc; TẢ DỰ &Aacute;N</span></span></u></strong></span></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Mục ti&ecirc;u dự &aacute;n</strong>:</span></span>

                <ul style="list-style-type:disc">
                    <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">X&acirc;y dựng c&aacute;c c&ocirc;ng tr&igrave;nh x&acirc;y dựng như nh&agrave; ở, cao ốc, cầu đường, hầm chui, hoặc c&aacute;c cơ sở hạ tầng kh&aacute;c.</span></span></li>
                    <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">Đảm bảo chất lượng, tiến độ v&agrave; chi ph&iacute; của dự &aacute;n được kiểm so&aacute;t v&agrave; quản l&yacute; hiệu quả.</span></span></li>
                </ul>
                </li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Ph&acirc;n t&iacute;ch v&agrave; lập kế hoạch</strong>:</span></span>
                <ul style="list-style-type:disc">
                    <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">Tiến h&agrave;nh ph&acirc;n t&iacute;ch định mức c&ocirc;ng việc, t&agrave;i nguy&ecirc;n cần thiết (nh&acirc;n sự, vật liệu, m&aacute;y m&oacute;c), v&agrave; thời gian để ho&agrave;n th&agrave;nh dự &aacute;n.</span></span></li>
                    <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">X&aacute;c định c&aacute;c rủi ro c&oacute; thể xảy ra v&agrave; lập kế hoạch đối ph&oacute;.</span></span></li>
                </ul>
                </li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>X&acirc;y dựng kế hoạch dự &aacute;n</strong>:</span></span>
                <ul style="list-style-type:disc">
                    <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">X&aacute;c định c&aacute;c bước cụ thể cần thực hiện v&agrave; lập lịch tr&igrave;nh cho từng bước.</span></span></li>
                    <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">Ph&acirc;n c&ocirc;ng nhiệm vụ cho c&aacute;c th&agrave;nh vi&ecirc;n trong nh&oacute;m dự &aacute;n v&agrave; x&aacute;c định tr&aacute;ch nhiệm của từng người.</span></span></li>
                </ul>
                </li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Thực hiện dự &aacute;n</strong>:</span></span>
                <ul style="list-style-type:disc">
                    <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">Theo d&otilde;i tiến độ của dự &aacute;n v&agrave; thực hiện c&aacute;c biện ph&aacute;p cần thiết để đảm bảo dự &aacute;n diễn ra theo kế hoạch.</span></span></li>
                    <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">Quản l&yacute; t&agrave;i nguy&ecirc;n (nh&acirc;n sự, vật liệu, kinh ph&iacute;) để đảm bảo sự phối hợp v&agrave; hiệu quả trong qu&aacute; tr&igrave;nh thi c&ocirc;ng.</span></span></li>
                </ul>
                </li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Kiểm so&aacute;t chất lượng</strong>:</span></span>
                <ul style="list-style-type:disc">
                    <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">Thực hiện kiểm tra chất lượng định kỳ để đảm bảo rằng c&ocirc;ng tr&igrave;nh được x&acirc;y dựng đ&uacute;ng theo ti&ecirc;u chuẩn v&agrave; y&ecirc;u cầu kỹ thuật.</span></span></li>
                    <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">Xử l&yacute; c&aacute;c vấn đề ph&aacute;t sinh v&agrave; điều chỉnh quy tr&igrave;nh l&agrave;m việc nếu cần thiết để cải thiện chất lượng sản phẩm.</span></span></li>
                </ul>
                </li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Quản l&yacute; rủi ro</strong>:</span></span>
                <ul style="list-style-type:disc">
                    <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">Theo d&otilde;i v&agrave; đ&aacute;nh gi&aacute; c&aacute;c rủi ro c&oacute; thể xảy ra trong qu&aacute; tr&igrave;nh x&acirc;y dựng v&agrave; thực hiện c&aacute;c biện ph&aacute;p đối ph&oacute; để giảm thiểu t&aacute;c động của ch&uacute;ng.</span></span></li>
                    <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">Đảm bảo sự chuẩn bị sẵn s&agrave;ng cho c&aacute;c t&igrave;nh huống kh&ocirc;ng mong muốn.</span></span></li>
                </ul>
                </li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Giao tiếp v&agrave; b&aacute;o c&aacute;o</strong>:</span></span>
                <ul style="list-style-type:disc">
                    <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">Li&ecirc;n lạc thường xuy&ecirc;n với c&aacute;c b&ecirc;n li&ecirc;n quan như kh&aacute;ch h&agrave;ng, nh&agrave; thầu, c&aacute;c cơ quan quản l&yacute; để th&ocirc;ng b&aacute;o về tiến độ v&agrave; vấn đề của dự &aacute;n.</span></span></li>
                    <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">Lập b&aacute;o c&aacute;o định kỳ về tiến độ, chất lượng, v&agrave; t&agrave;i ch&iacute;nh của dự &aacute;n để cung cấp th&ocirc;ng tin cho c&aacute;c b&ecirc;n li&ecirc;n quan.</span></span></li>
                </ul>
                </li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Đ&aacute;nh gi&aacute; v&agrave; học hỏi</strong>:</span></span>
                <ul style="list-style-type:disc">
                    <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">Đ&aacute;nh gi&aacute; kết quả của dự &aacute;n sau khi ho&agrave;n th&agrave;nh để học hỏi từ c&aacute;c kinh nghiệm t&iacute;ch luỹ v&agrave; cải thiện quy tr&igrave;nh l&agrave;m việc trong c&aacute;c dự &aacute;n sau n&agrave;y.</span></span></li>
                </ul>
                </li>
            </ol>
            ',
            'status' => 1
        ]);
        DB::table('projects')->insert([
            'name' => 'Dịch vụ tư vấn và giám sát',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">M&Ocirc; TẢ DỰ &Aacute;N</span></span></u></strong></span></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Tư vấn thiết kế</strong>: C&ocirc;ng ty sẽ cung cấp dịch vụ tư vấn cho c&aacute;c bước thiết kế của dự &aacute;n x&acirc;y dựng. Điều n&agrave;y bao gồm việc thẩm định c&aacute;c kế hoạch thiết kế, đảm bảo tu&acirc;n thủ c&aacute;c quy định kỹ thuật v&agrave; ph&aacute;p l&yacute;, cũng như đ&aacute;nh gi&aacute; t&iacute;nh khả thi của c&aacute;c phương &aacute;n thiết kế.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Tư vấn kỹ thuật</strong>: Cung cấp kiến <span style="font-family:&quot;Arial&quot;,sans-serif">​​</span>thức chuy&ecirc;n m&ocirc;n v&agrave; kỹ thuật cho c&aacute;c kh&iacute;a cạnh cụ thể của dự &aacute;n, như kỹ thuật x&acirc;y dựng, cơ điện, cấu tr&uacute;c, vật liệu x&acirc;y dựng, v&agrave; c&aacute;c yếu tố li&ecirc;n quan kh&aacute;c. Điều n&agrave;y gi&uacute;p đảm bảo rằng c&ocirc;ng tr&igrave;nh được thực hiện đ&uacute;ng c&aacute;ch v&agrave; đạt được chất lượng cao nhất.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Tư vấn quản l&yacute; dự &aacute;n</strong>: Hỗ trợ trong việc quản l&yacute; dự &aacute;n từ kh&acirc;u lập kế hoạch, ph&acirc;n t&iacute;ch rủi ro, quản l&yacute; ng&acirc;n s&aacute;ch v&agrave; t&agrave;i nguy&ecirc;n, đến gi&aacute;m s&aacute;t tiến độ v&agrave; thực hiện c&aacute;c biện ph&aacute;p điều chỉnh cần thiết.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Gi&aacute;m s&aacute;t thi c&ocirc;ng</strong>: Điều n&agrave;y bao gồm việc thực hiện kiểm tra định kỳ tr&ecirc;n c&ocirc;ng trường để đảm bảo rằng c&aacute;c hoạt động thi c&ocirc;ng được thực hiện theo đ&uacute;ng quy tr&igrave;nh v&agrave; ti&ecirc;u chuẩn. C&aacute;c chuy&ecirc;n gia sẽ kiểm tra chất lượng của vật liệu, kỹ thuật thi c&ocirc;ng v&agrave; an to&agrave;n lao động.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Gi&aacute;m s&aacute;t chất lượng</strong>: Đảm bảo rằng sản phẩm cuối c&ugrave;ng đ&aacute;p ứng c&aacute;c ti&ecirc;u chuẩn chất lượng được đề ra. Điều n&agrave;y c&oacute; thể bao gồm việc thực hiện c&aacute;c kiểm tra chất lượng định kỳ v&agrave; kiểm tra cuối c&ugrave;ng trước khi b&agrave;n giao c&ocirc;ng tr&igrave;nh.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Tư vấn ph&aacute;p l&yacute; v&agrave; quy định</strong>: Hỗ trợ kh&aacute;ch h&agrave;ng trong việc xử l&yacute; c&aacute;c thủ tục ph&aacute;p l&yacute; v&agrave; quản l&yacute; rủi ro li&ecirc;n quan đến dự &aacute;n x&acirc;y dựng, bao gồm việc đ&aacute;p ứng c&aacute;c y&ecirc;u cầu ph&aacute;p l&yacute; v&agrave; m&ocirc;i trường cũng như giải quyết tranh chấp.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Tư vấn về bảo tr&igrave; v&agrave; sửa chữa</strong>: Cung cấp c&aacute;c giải ph&aacute;p v&agrave; chiến lược để duy tr&igrave; v&agrave; bảo dưỡng c&ocirc;ng tr&igrave;nh sau khi ho&agrave;n th&agrave;nh, bao gồm lập kế hoạch bảo tr&igrave; định kỳ v&agrave; xử l&yacute; c&aacute;c vấn đề sửa chữa khi cần thiết.</span></span></li>
            </ol>

            <p>&nbsp;</p>
            ',
            'status' => 1
        ]);
        DB::table('projects')->insert([
            'name' => 'Xử lý chất thải và bảo vệ môi trường',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">M&Ocirc; TẢ DỰ &Aacute;N</span></span></u></strong></span></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Đ&aacute;nh gi&aacute; v&agrave; ph&acirc;n loại chất thải:</strong> C&ocirc;ng ty sẽ tiến h&agrave;nh đ&aacute;nh gi&aacute; c&aacute;c loại chất thải m&agrave; họ tạo ra trong qu&aacute; tr&igrave;nh x&acirc;y dựng, từ chất thải rắn đến chất thải lỏng v&agrave; kh&iacute; thải. Sau đ&oacute;, c&aacute;c loại chất thải n&agrave;y sẽ được ph&acirc;n loại theo t&iacute;nh chất v&agrave; nguồn gốc để x&aacute;c định c&aacute;ch xử l&yacute; ph&ugrave; hợp.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Lập kế hoạch xử l&yacute; chất thải:</strong> C&ocirc;ng ty sẽ ph&aacute;t triển kế hoạch cụ thể để xử l&yacute; v&agrave; loại bỏ chất thải một c&aacute;ch hiệu quả v&agrave; bảo vệ m&ocirc;i trường. Kế hoạch n&agrave;y c&oacute; thể bao gồm việc sử dụng c&aacute;c phương ph&aacute;p t&aacute;i chế, t&aacute;i chế, xử l&yacute; chất thải hữu cơ v&agrave; kh&ocirc;ng hữu cơ, hoặc thậm ch&iacute; x&acirc;y dựng c&aacute;c hệ thống xử l&yacute; nước thải v&agrave; kh&iacute; thải.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Thiết kế v&agrave; triển khai hệ thống xử l&yacute; chất thải:</strong> C&ocirc;ng ty c&oacute; thể thiết kế v&agrave; x&acirc;y dựng c&aacute;c hệ thống xử l&yacute; chất thải như nh&agrave; m&aacute;y t&aacute;i chế, trạm xử l&yacute; nước thải, hệ thống xử l&yacute; kh&iacute; thải, v&agrave; c&aacute;c c&ocirc;ng tr&igrave;nh cơ sở hạ tầng kh&aacute;c để đảm bảo việc xử l&yacute; chất thải một c&aacute;ch an to&agrave;n v&agrave; hiệu quả.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Gi&aacute;m s&aacute;t v&agrave; duy tr&igrave; hệ thống:</strong> Sau khi hệ thống xử l&yacute; hoạt động, c&ocirc;ng ty sẽ thực hiện việc gi&aacute;m s&aacute;t li&ecirc;n tục để đảm bảo rằng chất thải được xử l&yacute; đ&uacute;ng c&aacute;ch v&agrave; kh&ocirc;ng g&acirc;y ra t&aacute;c động ti&ecirc;u cực đến m&ocirc;i trường. C&ocirc;ng ty cũng sẽ thực hiện bảo dưỡng v&agrave; bảo tr&igrave; định kỳ để đảm bảo hiệu suất hoạt động của hệ thống.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Tuy&ecirc;n truyền v&agrave; gi&aacute;o dục cộng đồng:</strong> C&ocirc;ng ty c&oacute; thể thực hiện c&aacute;c hoạt động tuy&ecirc;n truyền v&agrave; gi&aacute;o dục cộng đồng về tầm quan trọng của việc xử l&yacute; chất thải v&agrave; bảo vệ m&ocirc;i trường, cũng như c&aacute;c biện ph&aacute;p m&agrave; cộng đồng c&oacute; thể thực hiện để giảm thiểu t&aacute;c động ti&ecirc;u cực đến m&ocirc;i trường.</span></span></li>
            </ol>

            <p>&nbsp;</p>
            ',
            'status' => 1
        ]);
        DB::table('projects')->insert([
            'name' => 'Xây dựng cơ sở hạ tầng',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">M&Ocirc; TẢ DỰ &Aacute;N</span></span></u></strong></span></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Đ&aacute;nh gi&aacute; nhu cầu v&agrave; ph&acirc;n t&iacute;ch:</strong> C&ocirc;ng ty sẽ tiến h&agrave;nh đ&aacute;nh gi&aacute; nhu cầu v&agrave; ph&acirc;n t&iacute;ch c&aacute;c yếu tố ảnh hưởng đến việc x&acirc;y dựng cơ sở hạ tầng. Điều n&agrave;y c&oacute; thể bao gồm nhu cầu về giao th&ocirc;ng, điện, nước v&agrave; hệ thống tho&aacute;t nước, cũng như c&aacute;c yếu tố m&ocirc;i trường v&agrave; x&atilde; hội kh&aacute;c.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Lập kế hoạch thiết kế:</strong> Sau khi đ&aacute;nh gi&aacute; được ho&agrave;n tất, c&ocirc;ng ty sẽ lập kế hoạch thiết kế cơ sở hạ tầng dựa tr&ecirc;n c&aacute;c yếu tố đ&atilde; ph&acirc;n t&iacute;ch. Điều n&agrave;y c&oacute; thể bao gồm việc thiết kế hệ thống giao th&ocirc;ng, hệ thống điện, hệ thống cung cấp nước v&agrave; tho&aacute;t nước, v&agrave; c&aacute;c c&ocirc;ng tr&igrave;nh phục vụ kh&aacute;c.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Thiết kế chi tiết:</strong> C&ocirc;ng ty sẽ tiến h&agrave;nh thiết kế chi tiết c&aacute;c phần của cơ sở hạ tầng, bao gồm cả thiết kế kỹ thuật v&agrave; thiết kế kiến tr&uacute;c. Điều n&agrave;y c&oacute; thể bao gồm việc vẽ bản vẽ kỹ thuật, t&iacute;nh to&aacute;n kỹ thuật, v&agrave; x&aacute;c định vật liệu v&agrave; thiết bị cần thiết.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>X&acirc;y dựng:</strong> Sau khi thiết kế được ph&ecirc; duyệt, c&ocirc;ng ty sẽ tiến h&agrave;nh x&acirc;y dựng cơ sở hạ tầng theo kế hoạch đ&atilde; đề ra. Điều n&agrave;y bao gồm việc chuẩn bị mặt bằng, triển khai c&aacute;c c&ocirc;ng việc x&acirc;y dựng, v&agrave; quản l&yacute; dự &aacute;n để đảm bảo rằng c&ocirc;ng việc diễn ra đ&uacute;ng tiến độ v&agrave; chất lượng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Kiểm tra v&agrave; bảo tr&igrave;:</strong> Sau khi ho&agrave;n th&agrave;nh, c&ocirc;ng ty sẽ tiến h&agrave;nh kiểm tra v&agrave; kiểm định cơ sở hạ tầng để đảm bảo rằng n&oacute; đ&aacute;p ứng c&aacute;c ti&ecirc;u chuẩn an to&agrave;n v&agrave; chất lượng. Sau đ&oacute;, c&ocirc;ng ty sẽ thực hiện c&aacute;c hoạt động bảo tr&igrave; định kỳ để đảm bảo rằng cơ sở hạ tầng lu&ocirc;n hoạt động ổn định v&agrave; hiệu quả.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Giao th&ocirc;ng v&agrave; quản l&yacute; dự &aacute;n:</strong> Trong suốt qu&aacute; tr&igrave;nh dự &aacute;n, c&ocirc;ng ty sẽ thực hiện quản l&yacute; giao th&ocirc;ng v&agrave; quản l&yacute; dự &aacute;n để đảm bảo an to&agrave;n cho người tham gia giao th&ocirc;ng v&agrave; đảm bảo rằng dự &aacute;n được triển khai một c&aacute;ch hiệu quả v&agrave; đ&uacute;ng tiến độ.</span></span></li>
            </ol>
            ',
            'status' => 1
        ]);

    }
}
