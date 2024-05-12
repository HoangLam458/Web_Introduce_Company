<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //VLXD
        DB::table('products')->insert([
            'name' => 'Gạch',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">SẢN PHẨM</span></span></u></strong></span></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Chất liệu:</strong> Gạch đỏ thường được sản xuất từ một hỗn hợp của xi măng, c&aacute;t, nước v&agrave; c&aacute;c phụ gia chất lượng cao. Tỷ lệ hỗn hợp n&agrave;y c&oacute; thể thay đổi t&ugrave;y thuộc v&agrave;o y&ecirc;u cầu kỹ thuật cụ thể v&agrave; mục đ&iacute;ch sử dụng của gạch.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Quy tr&igrave;nh sản xuất:</strong> Nguy&ecirc;n liệu được trộn với nhau để tạo th&agrave;nh một hỗn hợp đồng nhất. Sau đ&oacute;, hỗn hợp n&agrave;y được đổ v&agrave;o khu&ocirc;n c&oacute; h&igrave;nh dạng v&agrave; k&iacute;ch thước mong muốn. Qu&aacute; tr&igrave;nh đổ n&agrave;y thường được thực hiện trong m&ocirc;i trường c&acirc;n nặng v&agrave; &aacute;p lực để đảm bảo rằng gạch c&oacute; độ bền cao v&agrave; bề mặt mịn m&agrave;ng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Đặc điểm kỹ thuật:</strong> Gạch đỏ thường c&oacute; độ d&agrave;y v&agrave; k&iacute;ch thước đồng nhất, gi&uacute;p dễ d&agrave;ng trong qu&aacute; tr&igrave;nh lắp đặt v&agrave; x&acirc;y dựng. Bề mặt của gạch thường được l&agrave;m mịn để tạo ra một bề mặt đẹp v&agrave; dễ vệ sinh.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Ứng dụng:</strong> Gạch đỏ được sử dụng rộng r&atilde;i trong x&acirc;y dựng nh&agrave; ở, c&ocirc;ng tr&igrave;nh c&ocirc;ng nghiệp v&agrave; d&acirc;n dụng. Ch&uacute;ng c&oacute; thể được sử dụng cho nền nh&agrave;, tường, s&agrave;n v&agrave; c&aacute;c c&ocirc;ng tr&igrave;nh kh&aacute;c t&ugrave;y thuộc v&agrave;o y&ecirc;u cầu cụ thể của dự &aacute;n.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Ưu điểm:</strong> Gạch đỏ thường c&oacute; độ bền cao, kh&aacute;ng nước tốt v&agrave; dễ chịu được c&aacute;c điều kiện thời tiết khắc nghiệt. Ngo&agrave;i ra, ch&uacute;ng cũng c&oacute; thể được tạo th&agrave;nh trong c&aacute;c h&igrave;nh dạng v&agrave; k&iacute;ch thước kh&aacute;c nhau để ph&ugrave; hợp với nhu cầu thiết kế cụ thể của dự &aacute;n.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Nhược điểm:</strong> Mặc d&ugrave; gạch đỏ c&oacute; nhiều ưu điểm, nhưng ch&uacute;ng cũng c&oacute; thể nặng v&agrave; cần được vận chuyển v&agrave; xử l&yacute; cẩn thận để tr&aacute;nh hỏng h&oacute;c trong qu&aacute; tr&igrave;nh vận chuyển v&agrave; lắp đặt.</span></span></li>
            </ol>
            ',
            'img'=> '1.jpg',
            'price'=>'0',
            'product_type_id'=>1,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Xi Măng Thăng Long',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt">M&Ocirc; TẢ </span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt">SẢN PHẨM</span></u></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Xi măng Thăng Long l&agrave; một trong những loại xi măng phổ biến tại Việt Nam, sản xuất bởi C&ocirc;ng ty Cổ phần Xi măng Thăng Long. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về xi măng Thăng Long:</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">1. Th&agrave;nh phần:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Xi măng Thăng Long thường được sản xuất từ c&aacute;c nguy&ecirc;n liệu ch&iacute;nh như đ&aacute; v&ocirc;i, đất s&eacute;t v&agrave; sỏi.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">C&aacute;c th&agrave;nh phần n&agrave;y được nung n&oacute;ng ở nhiệt độ cao để tạo ra clinker, một nguy&ecirc;n liệu ch&iacute;nh để sản xuất xi măng.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">2. Quy tr&igrave;nh sản xuất:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Quy tr&igrave;nh sản xuất xi măng Thăng Long thường bao gồm c&aacute;c bước như khai th&aacute;c nguy&ecirc;n liệu, nghiền, trộn, nung chảy, v&agrave; nghiền mịn để tạo ra bột xi măng cuối c&ugrave;ng.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Qu&aacute; tr&igrave;nh sản xuất thường tu&acirc;n thủ c&aacute;c ti&ecirc;u chuẩn chất lượng nghi&ecirc;m ngặt để đảm bảo sản phẩm cuối c&ugrave;ng đạt được chất lượng cao nhất.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">3. Đặc điểm kỹ thuật:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Xi măng Thăng Long thường c&oacute; đặc t&iacute;nh chịu lực cao, độ bền cơ học v&agrave; khả năng kết d&iacute;nh tốt.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Độ tinh khiết v&agrave; h&agrave;m lượng c&aacute;c th&agrave;nh phần cơ bản như clinker v&agrave; phụ gia được kiểm so&aacute;t cẩn thận để đảm bảo chất lượng sản phẩm.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">4. Ứng dụng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Xi măng Thăng Long được sử dụng rộng r&atilde;i trong x&acirc;y dựng c&aacute;c c&ocirc;ng tr&igrave;nh d&acirc;n dụng v&agrave; c&ocirc;ng nghiệp, từ việc x&acirc;y nh&agrave; ở, cầu đường, đến c&aacute;c c&ocirc;ng tr&igrave;nh c&ocirc;ng nghiệp lớn.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Ngo&agrave;i ra, xi măng Thăng Long cũng c&oacute; thể được sử dụng trong c&aacute;c ứng dụng chuy&ecirc;n biệt như sản xuất vật liệu x&acirc;y dựng v&agrave; l&agrave;m mịn bề mặt.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">5. Ưu điểm:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Xi măng Thăng Long thường được đ&aacute;nh gi&aacute; cao về chất lượng v&agrave; độ tin cậy.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Sản phẩm n&agrave;y thường c&oacute; gi&aacute; th&agrave;nh hợp l&yacute; v&agrave; dễ d&agrave;ng tiếp cận tr&ecirc;n thị trường, l&agrave;m cho n&oacute; trở th&agrave;nh lựa chọn phổ biến cho c&aacute;c dự &aacute;n x&acirc;y dựng.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">6. Ti&ecirc;u chuẩn chất lượng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Xi măng Thăng Long thường tu&acirc;n thủ c&aacute;c ti&ecirc;u chuẩn chất lượng quốc gia v&agrave; quốc tế để đảm bảo rằng sản phẩm đ&aacute;p ứng c&aacute;c y&ecirc;u cầu kỹ thuật v&agrave; an to&agrave;n.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, xi măng Thăng Long l&agrave; một sản phẩm chất lượng v&agrave; đ&aacute;ng tin cậy được sử dụng rộng r&atilde;i trong ng&agrave;nh x&acirc;y dựng tại Việt Nam v&agrave; c&oacute; uy t&iacute;n tr&ecirc;n thị trường x&acirc;y dựng quốc tế.</span></span></span></p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>
            ',
            'img'=> '2.jpg',
            'price'=>'0',
            'product_type_id'=>1,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Thép Pomina',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt">M&Ocirc; TẢ </span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt">SẢN PHẨM</span></u></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Th&eacute;p Pomina l&agrave; một trong những loại th&eacute;p phổ biến được sản xuất v&agrave; cung cấp bởi C&ocirc;ng ty TNHH Th&eacute;p Pomina, một trong những c&ocirc;ng ty h&agrave;ng đầu trong ng&agrave;nh sản xuất th&eacute;p tại Việt Nam. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về th&eacute;p Pomina:</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">1. Th&agrave;nh phần:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Th&eacute;p Pomina được sản xuất từ nguy&ecirc;n liệu ch&iacute;nh l&agrave; quặng sắt, than cốc v&agrave; c&aacute;c hợp kim kim loại kh&aacute;c như nickel, chrome, v&agrave; mangan.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Qu&aacute; tr&igrave;nh sản xuất th&ocirc;ng thường bao gồm nung n&oacute;ng nguy&ecirc;n liệu để tạo ra th&eacute;p n&oacute;ng chảy, sau đ&oacute; l&agrave; c&aacute;c bước tinh luyện v&agrave; gia c&ocirc;ng để tạo ra sản phẩm cuối c&ugrave;ng.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">2. Loại th&eacute;p:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Th&eacute;p Pomina sản xuất v&agrave; cung cấp một loạt c&aacute;c loại th&eacute;p, bao gồm th&eacute;p c&aacute;n nguội, th&eacute;p c&aacute;n n&oacute;ng, th&eacute;p h&igrave;nh, th&eacute;p tấm v&agrave; th&eacute;p ống, phục vụ cho nhiều mục đ&iacute;ch sử dụng trong x&acirc;y dựng, c&ocirc;ng nghiệp v&agrave; c&aacute;c ng&agrave;nh kh&aacute;c.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">3. Đặc điểm kỹ thuật:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Th&eacute;p Pomina thường c&oacute; đặc t&iacute;nh cơ học cao, độ cứng tốt v&agrave; khả năng chịu lực tốt, l&agrave;m cho n&oacute; trở th&agrave;nh vật liệu l&yacute; tưởng cho c&aacute;c c&ocirc;ng tr&igrave;nh c&oacute; y&ecirc;u cầu cao về độ bền v&agrave; an to&agrave;n.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Sản phẩm c&oacute; độ đồng nhất cao, k&iacute;ch thước ch&iacute;nh x&aacute;c v&agrave; bề mặt mịn, gi&uacute;p dễ d&agrave;ng trong qu&aacute; tr&igrave;nh gia c&ocirc;ng v&agrave; lắp đặt.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">4. Ứng dụng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Th&eacute;p Pomina được sử dụng rộng r&atilde;i trong x&acirc;y dựng c&aacute;c c&ocirc;ng tr&igrave;nh d&acirc;n dụng v&agrave; c&ocirc;ng nghiệp như nh&agrave; ở, cầu đường, nh&agrave; m&aacute;y, xưởng sản xuất, v&agrave; c&aacute;c c&ocirc;ng tr&igrave;nh kỹ thuật c&ocirc;ng nghiệp kh&aacute;c.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; cũng được sử dụng trong sản xuất c&aacute;c sản phẩm gia c&ocirc;ng th&eacute;p như cột, dầm, kết cấu th&eacute;p, v&agrave; c&aacute;c sản phẩm kh&aacute;c.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">5. Ưu điểm:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Th&eacute;p Pomina được đ&aacute;nh gi&aacute; cao về chất lượng, độ tin cậy v&agrave; tu&acirc;n thủ c&aacute;c ti&ecirc;u chuẩn chất lượng quốc tế v&agrave; quốc gia.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Sản phẩm thường c&oacute; gi&aacute; th&agrave;nh hợp l&yacute; v&agrave; dễ d&agrave;ng tiếp cận tr&ecirc;n thị trường, l&agrave;m cho n&oacute; trở th&agrave;nh lựa chọn phổ biến trong ng&agrave;nh x&acirc;y dựng v&agrave; c&ocirc;ng nghiệp.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">6. Ti&ecirc;u chuẩn chất lượng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Th&eacute;p Pomina thường tu&acirc;n thủ c&aacute;c ti&ecirc;u chuẩn chất lượng cao như Ti&ecirc;u chuẩn Ch&acirc;u &Acirc;u (EN), Ti&ecirc;u chuẩn Hoa Kỳ (ASTM), Ti&ecirc;u chuẩn Việt Nam v&agrave; c&aacute;c ti&ecirc;u chuẩn quốc gia kh&aacute;c để đảm bảo rằng sản phẩm đ&aacute;p ứng c&aacute;c y&ecirc;u cầu kỹ thuật v&agrave; an to&agrave;n.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, th&eacute;p Pomina l&agrave; một sản phẩm th&eacute;p chất lượng cao v&agrave; đ&aacute;ng tin cậy, được sử dụng rộng r&atilde;i trong nhiều lĩnh vực kh&aacute;c nhau của ng&agrave;nh c&ocirc;ng nghiệp v&agrave; x&acirc;y dựng tại Việt Nam v&agrave; tr&ecirc;n thị trường quốc tế.</span></span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '3.jpg',
            'price'=>'0',
            'product_type_id'=>1,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Thép Phi 20 Việt Nhật',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt">M&Ocirc; TẢ </span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt">SẢN PHẨM</span></u></strong></span></span></p>

            <p><br />
            <span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Th&eacute;p phi 20 Việt Nhật l&agrave; một loại th&eacute;p d&ugrave;ng cho việc sản xuất v&agrave; gia c&ocirc;ng c&aacute;c sản phẩm c&oacute; đường k&iacute;nh ngo&agrave;i l&agrave; 20mm. Đ&acirc;y l&agrave; sản phẩm c&oacute; nguồn gốc từ Việt Nam hoặc Nhật Bản v&agrave; thường được sử dụng rộng r&atilde;i trong ng&agrave;nh x&acirc;y dựng, cơ kh&iacute;, v&agrave; nhiều ng&agrave;nh c&ocirc;ng nghiệp kh&aacute;c. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về th&eacute;p phi 20 Việt Nhật:</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">1. Th&agrave;nh phần:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Th&eacute;p phi 20 Việt Nhật thường được sản xuất từ nguy&ecirc;n liệu ch&iacute;nh l&agrave; quặng sắt, cacbon v&agrave; c&aacute;c hợp kim kim loại kh&aacute;c như silic, mangan v&agrave; phosphorus.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Qu&aacute; tr&igrave;nh sản xuất th&ocirc;ng thường bao gồm nung n&oacute;ng nguy&ecirc;n liệu, c&aacute;n n&oacute;ng hoặc c&aacute;n lạnh để tạo ra sản phẩm cuối c&ugrave;ng.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">2. Đặc điểm kỹ thuật:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Đường k&iacute;nh ngo&agrave;i của th&eacute;p phi 20 l&agrave; 20mm, nhưng c&oacute; thể c&oacute; độ ch&iacute;nh x&aacute;c cao hơn t&ugrave;y thuộc v&agrave;o y&ecirc;u cầu cụ thể của dự &aacute;n hoặc sản phẩm.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Th&eacute;p phi 20 Việt Nhật thường c&oacute; độ đồng nhất cao v&agrave; bề mặt mịn, gi&uacute;p dễ d&agrave;ng trong qu&aacute; tr&igrave;nh gia c&ocirc;ng v&agrave; sử dụng.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">3. Ứng dụng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Th&eacute;p phi 20 được sử dụng rộng r&atilde;i trong x&acirc;y dựng c&aacute;c c&ocirc;ng tr&igrave;nh d&acirc;n dụng v&agrave; c&ocirc;ng nghiệp, như x&acirc;y dựng cột, dầm, khung kết cấu, v&agrave; c&aacute;c c&ocirc;ng tr&igrave;nh cơ sở hạ tầng kh&aacute;c.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; cũng được sử dụng trong sản xuất c&aacute;c sản phẩm gia c&ocirc;ng th&eacute;p như trục, v&iacute;t, ống, v&agrave; nhiều sản phẩm kh&aacute;c trong ng&agrave;nh c&ocirc;ng nghiệp.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">4. Ưu điểm:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Th&eacute;p phi 20 Việt Nhật thường c&oacute; chất lượng cao, độ bền cao v&agrave; khả năng chịu lực tốt.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Sản phẩm n&agrave;y thường c&oacute; gi&aacute; th&agrave;nh hợp l&yacute; v&agrave; dễ d&agrave;ng tiếp cận tr&ecirc;n thị trường, l&agrave;m cho n&oacute; trở th&agrave;nh lựa chọn phổ biến trong ng&agrave;nh c&ocirc;ng nghiệp v&agrave; x&acirc;y dựng.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">5. Ti&ecirc;u chuẩn chất lượng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Th&eacute;p phi 20 thường tu&acirc;n thủ c&aacute;c ti&ecirc;u chuẩn chất lượng quốc gia v&agrave; quốc tế như ti&ecirc;u chuẩn JIS (Japan Industrial Standards) hoặc c&aacute;c ti&ecirc;u chuẩn quốc gia kh&aacute;c để đảm bảo chất lượng v&agrave; an to&agrave;n.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, th&eacute;p phi 20 Việt Nhật l&agrave; một sản phẩm th&eacute;p chất lượng cao v&agrave; đ&aacute;ng tin cậy, được sử dụng rộng r&atilde;i trong nhiều lĩnh vực của ng&agrave;nh c&ocirc;ng nghiệp v&agrave; x&acirc;y dựng tại Việt Nam v&agrave; tr&ecirc;n thị trường quốc tế.</span></span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '4.jpg',
            'price'=>'0',
            'product_type_id'=>1,
            'status' => 1
        ]);
        //VL lót sàn
        DB::table('products')->insert([
            'name' => 'Sàn gỗ ShopHouse SH160',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt">M&Ocirc; TẢ </span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt">SẢN PHẨM</span></u></strong></span></span></p>

            <p><br />
            <span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">S&agrave;n gỗ ShopHouse SH160 l&agrave; một loại s&agrave;n gỗ c&ocirc;ng nghiệp c&oacute; thiết kế hiện đại v&agrave; đa dạng về m&agrave;u sắc v&agrave; kết cấu, th&iacute;ch hợp cho việc lắp đặt trong c&aacute;c kh&ocirc;ng gian thương mại như c&aacute;c cửa h&agrave;ng, nh&agrave; h&agrave;ng, văn ph&ograve;ng v&agrave; c&aacute;c khu vực d&acirc;n dụng kh&aacute;c. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về s&agrave;n gỗ ShopHouse SH160:</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">1. Chất liệu:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">S&agrave;n gỗ ShopHouse SH160 thường được sản xuất từ gỗ tổng hợp (composite wood) hoặc HDF (High-Density Fiberboard), được kết hợp với một lớp vật liệu bề mặt như melamine hoặc laminate để tạo ra một bề mặt mịn v&agrave; b&oacute;ng đẹp.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">2. K&iacute;ch thước:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">S&agrave;n gỗ ShopHouse SH160 thường c&oacute; k&iacute;ch thước ti&ecirc;u chuẩn với chiều d&agrave;i v&agrave; chiều rộng cố định, th&iacute;ch hợp cho việc lắp đặt tiện lợi v&agrave; nhanh ch&oacute;ng. K&iacute;ch thước cụ thể c&oacute; thể thay đổi t&ugrave;y thuộc v&agrave;o y&ecirc;u cầu của kh&aacute;ch h&agrave;ng.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">3. M&agrave;u sắc v&agrave; hoa văn:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">ShopHouse SH160 c&oacute; sẵn trong một loạt c&aacute;c m&agrave;u sắc v&agrave; hoa văn kh&aacute;c nhau để ph&ugrave; hợp với phong c&aacute;ch thiết kế v&agrave; nhu cầu sử dụng của kh&aacute;ch h&agrave;ng. C&aacute;c m&agrave;u sắc thường bao gồm c&aacute;c gam m&agrave;u gỗ tự nhi&ecirc;n, m&agrave;u trắng, x&aacute;m, v&agrave; c&aacute;c m&agrave;u sắc hiện đại kh&aacute;c.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">4. Đặc điểm kỹ thuật:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">S&agrave;n gỗ ShopHouse SH160 thường c&oacute; độ d&agrave;y ph&ugrave; hợp để chịu được tải trọng v&agrave; ma s&aacute;t trong khi vẫn giữ được t&iacute;nh thẩm mỹ.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Bề mặt của s&agrave;n gỗ thường được gia c&ocirc;ng mịn v&agrave; chống trầy xước, gi&uacute;p bảo tồn độ mới v&agrave; b&oacute;ng của sản phẩm sau thời gian sử dụng.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">5. Ứng dụng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">S&agrave;n gỗ ShopHouse SH160 th&iacute;ch hợp cho việc lắp đặt trong c&aacute;c kh&ocirc;ng gian thương mại như cửa h&agrave;ng, nh&agrave; h&agrave;ng, văn ph&ograve;ng, showroom v&agrave; c&aacute;c khu vực d&acirc;n dụng kh&aacute;c.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; cũng c&oacute; thể được sử dụng trong c&aacute;c dự &aacute;n x&acirc;y dựng mới hoặc cải tạo để tạo ra một kh&ocirc;ng gian sống v&agrave; l&agrave;m việc thoải m&aacute;i v&agrave; hiện đại.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">6. Ưu điểm:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">S&agrave;n gỗ ShopHouse SH160 c&oacute; độ bền cao, dễ d&agrave;ng lắp đặt v&agrave; bảo dưỡng, v&agrave; c&oacute; khả năng chống mối mọt v&agrave; chịu lực tốt.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; cũng mang lại sự ấm &aacute;p v&agrave; sang trọng cho bất kỳ kh&ocirc;ng gian n&agrave;o m&agrave; n&oacute; được sử dụng.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, s&agrave;n gỗ ShopHouse SH160 l&agrave; một lựa chọn l&yacute; tưởng cho việc trang tr&iacute; v&agrave; ho&agrave;n thiện nội thất trong c&aacute;c kh&ocirc;ng gian thương mại v&agrave; d&acirc;n dụng, với sự kết hợp giữa độ bền, thẩm mỹ v&agrave; tiện lợi trong việc sử dụng</span></span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '5.jpg',
            'price'=>'185000',
            'product_type_id'=>2,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Đá Hoa Cương River White',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt">M&Ocirc; TẢ </span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt">SẢN PHẨM</span></u></strong></span></span></p>

            <p><br />
            <span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&aacute; Hoa Cương River White l&agrave; một loại đ&aacute; hoa cương tự nhi&ecirc;n c&oacute; nguồn gốc từ c&aacute;c s&ocirc;ng, s&ocirc;ng ng&ograve;i hoặc suối. N&oacute; được biết đến với m&agrave;u sắc trắng tinh khiết v&agrave; c&aacute;c đặc điểm tự nhi&ecirc;n độc đ&aacute;o, l&agrave;m cho n&oacute; trở th&agrave;nh một vật liệu phổ biến trong ng&agrave;nh x&acirc;y dựng v&agrave; trang tr&iacute; nội ngoại thất. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về đ&aacute; hoa cương River White:</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">1. M&agrave;u sắc v&agrave; hoa văn:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&aacute; Hoa Cương River White c&oacute; m&agrave;u sắc chủ đạo l&agrave; trắng tinh khiết, thường đi k&egrave;m với c&aacute;c đốm v&agrave; v&acirc;n m&agrave;u x&aacute;m nhẹ. M&agrave;u sắc n&agrave;y tạo ra một vẻ đẹp thanh lịch v&agrave; sang trọng cho c&aacute;c bề mặt được sử dụng.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">2. Đặc điểm vật l&yacute;:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&aacute; hoa cương River White thường c&oacute; cấu tr&uacute;c tinh thể phức tạp, tạo ra c&aacute;c họa tiết tự nhi&ecirc;n độc đ&aacute;o tr&ecirc;n bề mặt.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Độ cứng của đ&aacute; hoa cương n&agrave;y thường cao, l&agrave;m cho n&oacute; chống được c&aacute;c t&aacute;c động mạnh từ va đập v&agrave; m&agrave;i m&ograve;n.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">3. Ứng dụng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&aacute; Hoa Cương River White thường được sử dụng trong nhiều mục đ&iacute;ch kh&aacute;c nhau trong x&acirc;y dựng v&agrave; trang tr&iacute; nội thất v&agrave; ngoại thất, bao gồm l&aacute;t nền, tường, b&agrave;n l&agrave;m việc, bồn tắm, v&agrave; c&aacute;c bề mặt đ&aacute; kh&aacute;c.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Ngo&agrave;i ra, n&oacute; cũng được sử dụng rộng r&atilde;i trong lĩnh vực trang tr&iacute; cảnh quan như lối đi, hồ nước, bức tường, v&agrave; c&aacute;c cấu tr&uacute;c ngoại thất kh&aacute;c.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">4. Ưu điểm:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&aacute; hoa cương River White c&oacute; vẻ đẹp tự nhi&ecirc;n v&agrave; độc đ&aacute;o, mang lại sự sang trọng v&agrave; lịch l&atilde;m cho bất kỳ kh&ocirc;ng gian n&agrave;o n&oacute; được sử dụng.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; cũng c&oacute; độ bền v&agrave; độ bền cao, l&agrave;m cho n&oacute; th&iacute;ch hợp cho việc sử dụng trong c&aacute;c m&ocirc;i trường c&oacute; điều kiện khắc nghiệt như ngo&agrave;i trời.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">5. Bảo dưỡng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Để giữ cho đ&aacute; hoa cương River White lu&ocirc;n đẹp v&agrave; bền đẹp, cần thường xuy&ecirc;n l&agrave;m sạch v&agrave; bảo dưỡng bề mặt của n&oacute; bằng c&aacute;c phương ph&aacute;p ph&ugrave; hợp như lau ch&ugrave;i bằng nước v&agrave; dung dịch l&agrave;m sạch kh&ocirc;ng chứa axit.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, đ&aacute; hoa cương River White l&agrave; một vật liệu trang tr&iacute; tự nhi&ecirc;n tuyệt vời, mang lại vẻ đẹp v&agrave; sự sang trọng cho bất kỳ kh&ocirc;ng gian n&agrave;o n&oacute; được sử dụng, đồng thời cung cấp độ bền v&agrave; độ bền cao trong suốt thời gian sử dụng.</span></span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '6.jpg',
            'price'=>'2050000',
            'product_type_id'=>2,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Sàn Gỗ Công Nghiệp Robina 12mm Bản Lớn W25- Sàn Malaysia Chịu Nước',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt">M&Ocirc; TẢ </span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt">SẢN PHẨM</span></u></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">S&agrave;n Gỗ C&ocirc;ng Nghiệp Robina 12mm Bản Lớn W25 l&agrave; một loại s&agrave;n gỗ c&ocirc;ng nghiệp c&oacute; nguồn gốc từ Malaysia, được sản xuất v&agrave; cung cấp bởi thương hiệu Robina. Đ&acirc;y l&agrave; một sản phẩm chất lượng cao với độ d&agrave;y 12mm v&agrave; bề mặt bản lớn, được thiết kế để chịu nước tốt. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về s&agrave;n gỗ c&ocirc;ng nghiệp Robina 12mm Bản Lớn W25:</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">1. Chất liệu:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">S&agrave;n Gỗ C&ocirc;ng Nghiệp Robina thường được sản xuất từ c&aacute;c vật liệu như HDF (High-Density Fiberboard) hoặc MDF (Medium-Density Fiberboard), với lớp phủ bề mặt chống trầy xước v&agrave; chống thấm nước.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">2. Đặc điểm kỹ thuật:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">S&agrave;n gỗ Robina 12mm c&oacute; độ d&agrave;y 12mm, tạo cảm gi&aacute;c vững chắc v&agrave; chắc chắn khi sử dụng.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Bản lớn của sản phẩm, c&ugrave;ng với việc kết hợp c&aacute;c họa tiết v&agrave; v&acirc;n gỗ tự nhi&ecirc;n, gi&uacute;p tạo ra một kh&ocirc;ng gian rộng r&atilde;i v&agrave; sang trọng.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">3. Chịu nước:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">S&agrave;n gỗ Robina được thiết kế để chịu nước tốt, điều n&agrave;y l&agrave;m cho n&oacute; trở th&agrave;nh một lựa chọn ph&ugrave; hợp cho c&aacute;c khu vực c&oacute; độ ẩm cao như ph&ograve;ng tắm, nh&agrave; bếp v&agrave; khu vực tiếp kh&aacute;ch.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Lớp phủ bề mặt chống thấm nước gi&uacute;p bảo vệ s&agrave;n khỏi nước v&agrave; độ ẩm, từ đ&oacute; giữ cho sản phẩm lu&ocirc;n đẹp v&agrave; bền bỉ trong thời gian d&agrave;i.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">4. Ứng dụng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">S&agrave;n gỗ Robina th&iacute;ch hợp cho việc lắp đặt trong nhiều kh&ocirc;ng gian kh&aacute;c nhau, từ nh&agrave; ở đến c&aacute;c khu vực thương mại như cửa h&agrave;ng, văn ph&ograve;ng, nh&agrave; h&agrave;ng, v&agrave; kh&aacute;ch sạn.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Sản phẩm c&oacute; thể được sử dụng tr&ecirc;n cả nền nh&agrave; phẳng v&agrave; nền nh&agrave; c&oacute; hệ thống sưởi ấm dưới s&agrave;n.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">5. Ưu điểm:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">S&agrave;n gỗ Robina mang lại vẻ đẹp tự nhi&ecirc;n v&agrave; ấm &aacute;p của gỗ tự nhi&ecirc;n, nhưng với khả năng chịu nước v&agrave; bền bỉ hơn.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Độ d&agrave;y 12mm v&agrave; bề mặt bản lớn tạo ra một kh&ocirc;ng gian sống v&agrave; l&agrave;m việc thoải m&aacute;i v&agrave; sang trọng.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, s&agrave;n gỗ c&ocirc;ng nghiệp Robina 12mm Bản Lớn W25 l&agrave; một lựa chọn tuyệt vời cho việc trang tr&iacute; nội thất, mang lại sự đẹp mắt, chịu nước v&agrave; bền bỉ trong thời gian sử dụng.</span></span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '7.jpg',
            'price'=>'475000',
            'product_type_id'=>2,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Tấm ốp vân đá PVC3009',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt">M&Ocirc; TẢ </span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt">SẢN PHẨM</span></u></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Tấm ốp v&acirc;n đ&aacute; PVC3009 l&agrave; một loại vật liệu trang tr&iacute; nội thất được l&agrave;m từ nhựa PVC, c&oacute; thiết kế với họa tiết v&acirc;n đ&aacute; tự nhi&ecirc;n để tạo ra vẻ đẹp tự nhi&ecirc;n v&agrave; sang trọng cho c&aacute;c kh&ocirc;ng gian trong nh&agrave;. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về tấm ốp v&acirc;n đ&aacute; PVC3009:</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">1. Chất liệu:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Tấm ốp v&acirc;n đ&aacute; PVC3009 được sản xuất từ nhựa PVC (polyvinyl chloride), một loại vật liệu nhẹ, bền, dễ l&agrave;m sạch v&agrave; chống thấm nước.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">2. V&acirc;n đ&aacute; tự nhi&ecirc;n:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Tấm ốp được thiết kế với họa tiết v&acirc;n đ&aacute; tự nhi&ecirc;n, gi&uacute;p tạo ra vẻ đẹp v&agrave; phong c&aacute;ch tự nhi&ecirc;n, nhưng với khả năng chịu nước v&agrave; bền bỉ của nhựa PVC.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">3. Đặc điểm kỹ thuật:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Tấm ốp v&acirc;n đ&aacute; PVC3009 thường c&oacute; độ d&agrave;y nhất định, thường từ 5mm đến 10mm, t&ugrave;y thuộc v&agrave;o y&ecirc;u cầu cụ thể của sản phẩm v&agrave; dự &aacute;n.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">K&iacute;ch thước của tấm ốp cũng c&oacute; thể được t&ugrave;y chỉnh để ph&ugrave; hợp với k&iacute;ch thước v&agrave; thiết kế của kh&ocirc;ng gian cần trang tr&iacute;.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">4. Ứng dụng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Tấm ốp v&acirc;n đ&aacute; PVC3009 th&iacute;ch hợp cho việc trang tr&iacute; c&aacute;c kh&ocirc;ng gian nội thất như ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ, nh&agrave; bếp, ph&ograve;ng tắm, v&agrave; c&aacute;c kh&ocirc;ng gian thương mại kh&aacute;c như cửa h&agrave;ng, văn ph&ograve;ng, nh&agrave; h&agrave;ng, v&agrave; kh&aacute;ch sạn.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; cũng c&oacute; thể được sử dụng cho việc ốp tường, ốp trần, ốp cột, tạo v&aacute;ch ngăn, v&agrave; c&aacute;c ứng dụng trang tr&iacute; nội thất kh&aacute;c.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">5. Ưu điểm:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Tấm ốp v&acirc;n đ&aacute; PVC3009 mang lại vẻ đẹp tự nhi&ecirc;n v&agrave; sang trọng của đ&aacute; tự nhi&ecirc;n, nhưng với khả năng chống thấm nước, dễ vệ sinh v&agrave; bền bỉ của nhựa PVC.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Việc lắp đặt v&agrave; bảo dưỡng tấm ốp v&acirc;n đ&aacute; PVC3009 cũng rất dễ d&agrave;ng, l&agrave;m cho n&oacute; trở th&agrave;nh một lựa chọn phổ biến cho việc trang tr&iacute; nội thất.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, tấm ốp v&acirc;n đ&aacute; PVC3009 l&agrave; một lựa chọn tuyệt vời để tạo ra vẻ đẹp tự nhi&ecirc;n v&agrave; sang trọng cho c&aacute;c kh&ocirc;ng gian nội thất, với sự kết hợp ho&agrave;n hảo giữa vẻ đẹp v&agrave; t&iacute;nh tiện &iacute;ch của nhựa PVC.</span></span></span></p>
            ',
            'img'=> '8.jpg',
            'price'=>'0',
            'product_type_id'=>2,
            'status' => 1
        ]);
        // trang trí ngoại thất
        DB::table('products')->insert([
            'name' => 'Đá Kim Sa Trung',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt">M&Ocirc; TẢ </span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt">SẢN PHẨM</span></u></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&aacute; Kim Sa Trung l&agrave; một loại đ&aacute; tự nhi&ecirc;n được khai th&aacute;c từ c&aacute;c mỏ đ&aacute; ở Việt Nam, nổi tiếng với vẻ đẹp tự nhi&ecirc;n v&agrave; độc đ&aacute;o của m&igrave;nh. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về đ&aacute; Kim Sa Trung:</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">1. M&agrave;u sắc v&agrave; hoa văn:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&aacute; Kim Sa Trung thường c&oacute; m&agrave;u v&agrave;ng n&acirc;u pha trộn với c&aacute;c vệt v&agrave; đốm m&agrave;u trắng, x&aacute;m hoặc n&acirc;u, tạo n&ecirc;n một vẻ đẹp độc đ&aacute;o v&agrave; l&ocirc;i cuốn.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">V&acirc;n đ&aacute; tự nhi&ecirc;n tr&ecirc;n bề mặt của đ&aacute; Kim Sa Trung thường đa dạng v&agrave; phong ph&uacute;, tạo ra c&aacute;c họa tiết tự nhi&ecirc;n v&agrave; kh&ocirc;ng lặp lại.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">2. Đặc điểm vật l&yacute;:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&aacute; Kim Sa Trung thường c&oacute; cấu tr&uacute;c hạt tinh thể mịn v&agrave; độ cứng tương đối cao, l&agrave;m cho n&oacute; ph&ugrave; hợp để sử dụng trong nhiều ứng dụng kh&aacute;c nhau trong x&acirc;y dựng v&agrave; trang tr&iacute;.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">3. Ứng dụng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&aacute; Kim Sa Trung được sử dụng rộng r&atilde;i trong x&acirc;y dựng v&agrave; trang tr&iacute; nội thất, bao gồm l&aacute;t nền, tường, cầu thang, bồn tắm, lavabo v&agrave; c&aacute;c sản phẩm trang tr&iacute; kh&aacute;c.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Ngo&agrave;i ra, n&oacute; cũng thường được sử dụng để l&agrave;m c&aacute;c sản phẩm ngoại thất như b&agrave;n, ghế v&agrave; bức tường l&aacute;t đ&aacute;.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">4. Ưu điểm:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&aacute; Kim Sa Trung mang lại vẻ đẹp tự nhi&ecirc;n v&agrave; sang trọng cho bất kỳ kh&ocirc;ng gian n&agrave;o n&oacute; được sử dụng, từ nội thất đến ngoại thất.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Sự đa dạng về m&agrave;u sắc v&agrave; hoa văn của n&oacute; gi&uacute;p tạo ra c&aacute;c điểm nhấn v&agrave; kh&ocirc;ng gian ri&ecirc;ng biệt cho c&aacute;c dự &aacute;n trang tr&iacute;.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">5. Bảo dưỡng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Để duy tr&igrave; vẻ đẹp v&agrave; sự bền bỉ của đ&aacute; Kim Sa Trung, cần thường xuy&ecirc;n l&agrave;m sạch v&agrave; bảo dưỡng bề mặt của n&oacute; bằng c&aacute;c phương ph&aacute;p ph&ugrave; hợp như lau ch&ugrave;i bằng nước v&agrave; dung dịch l&agrave;m sạch kh&ocirc;ng chứa axit.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, đ&aacute; Kim Sa Trung l&agrave; một vật liệu trang tr&iacute; tự nhi&ecirc;n tuyệt vời, mang lại vẻ đẹp tự nhi&ecirc;n v&agrave; sang trọng cho c&aacute;c kh&ocirc;ng gian nội thất v&agrave; ngoại thất, với sự đa dạng v&agrave; t&iacute;nh tiện &iacute;ch cao.</span></span></span></p>

            <p>&nbsp;</p>

            <p>&quot;</p>
            ',
            'img'=> '9.jpg',
            'price'=>'0',
            'product_type_id'=>3,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Gạch Mosaic hình chiếc lá men bóng màu xanh, vàng MT-MSCL00002',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt">M&Ocirc; TẢ </span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt">SẢN PHẨM</span></u></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch Mosaic h&igrave;nh chiếc l&aacute; men b&oacute;ng m&agrave;u xanh v&agrave; v&agrave;ng MT-MSCL00002 l&agrave; một loại gạch trang tr&iacute; c&oacute; h&igrave;nh dạng v&agrave; hoa văn đặc biệt, được thiết kế để tạo ra c&aacute;c điểm nhấn v&agrave; kh&ocirc;ng gian trang tr&iacute; độc đ&aacute;o trong kh&ocirc;ng gian nội thất. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">1. H&igrave;nh dạng v&agrave; hoa văn:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch Mosaic c&oacute; h&igrave;nh dạng l&aacute; c&acirc;y với c&aacute;c l&aacute; nhỏ được gh&eacute;p lại để tạo th&agrave;nh h&igrave;nh dạng chiếc l&aacute;, tạo ra một điểm nhấn tự nhi&ecirc;n v&agrave; tươi s&aacute;ng cho kh&ocirc;ng gian trang tr&iacute;.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">M&agrave;u sắc chủ đạo của gạch l&agrave; m&agrave;u xanh v&agrave; v&agrave;ng, tạo ra sự nổi bật v&agrave; rực rỡ cho kh&ocirc;ng gian.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">2. Chất liệu:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch Mosaic n&agrave;y thường được l&agrave;m từ c&aacute;c vi&ecirc;n gạch men c&oacute; k&iacute;ch thước nhỏ, được kết hợp v&agrave; gh&eacute;p lại với nhau để tạo th&agrave;nh c&aacute;c mẫu hoa văn phức tạp.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Bề mặt của gạch thường được xử l&yacute; để c&oacute; độ b&oacute;ng cao, tạo ra hiệu ứng phản chiếu &aacute;nh s&aacute;ng v&agrave; l&agrave;m tăng th&ecirc;m sự s&aacute;ng b&oacute;ng cho kh&ocirc;ng gian.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">3. K&iacute;ch thước:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">K&iacute;ch thước của mỗi vi&ecirc;n gạch Mosaic c&oacute; thể thay đổi t&ugrave;y thuộc v&agrave;o mẫu m&atilde; cụ thể, nhưng thường l&agrave; c&aacute;c vi&ecirc;n nhỏ c&oacute; k&iacute;ch thước đồng nhất, tạo ra hiệu ứng tổng thể đồng nhất cho bề mặt trang tr&iacute;.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">4. Ứng dụng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch Mosaic h&igrave;nh chiếc l&aacute; m&agrave;u xanh v&agrave; v&agrave;ng thường được sử dụng để trang tr&iacute; c&aacute;c tường, s&agrave;n nh&agrave; tắm, nh&agrave; bếp, hoặc c&aacute;c khu vực kh&aacute;c trong nội thất.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; cũng c&oacute; thể được sử dụng để tạo ra c&aacute;c điểm nhấn trang tr&iacute; trong c&aacute;c dự &aacute;n trang tr&iacute; ngoại thất như hồ bơi, tường r&agrave;o, v&agrave; c&aacute;c bức tường ngoại thất kh&aacute;c.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">5. Ưu điểm:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch Mosaic với h&igrave;nh dạng l&aacute; m&agrave;u xanh v&agrave; v&agrave;ng mang lại sự tươi mới v&agrave; s&aacute;ng b&oacute;ng cho kh&ocirc;ng gian trang tr&iacute;, tạo ra một vẻ đẹp tự nhi&ecirc;n v&agrave; độc đ&aacute;o.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Sự kết hợp giữa m&agrave;u sắc v&agrave; hoa văn s&aacute;ng tạo tạo ra một kh&ocirc;ng gian trang tr&iacute; phong ph&uacute; v&agrave; đa dạng.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, gạch Mosaic h&igrave;nh chiếc l&aacute; m&agrave;u xanh v&agrave; v&agrave;ng l&agrave; một lựa chọn trang tr&iacute; tuyệt vời để tạo ra c&aacute;c điểm nhấn v&agrave; kh&ocirc;ng gian trang tr&iacute; độc đ&aacute;o trong kh&ocirc;ng gian nội thất v&agrave; ngoại thất.</span></span></span></p>
            ',
            'img'=> '10.jpg',
            'price'=>'2200000',
            'product_type_id'=>3,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Gạch Tkg (Taicera) G68987 - Onyx Stone Series - Grey',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt">M&Ocirc; TẢ </span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt">SẢN PHẨM</span></u></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch TKG (Taicera) G68987 thuộc d&ograve;ng sản phẩm Onyx Stone Series với m&agrave;u sắc chủ đạo l&agrave; m&agrave;u Grey (x&aacute;m). Đ&acirc;y l&agrave; một loại gạch l&aacute;t s&agrave;n chất lượng cao từ thương hiệu uy t&iacute;n Taicera, với c&aacute;c đặc điểm v&agrave; ứng dụng sau:</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">1. M&agrave;u sắc v&agrave; hoa văn:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">M&agrave;u sắc chủ đạo của gạch l&agrave; m&agrave;u Grey (x&aacute;m), tạo ra một vẻ đẹp hiện đại, tinh tế v&agrave; dễ phối hợp với c&aacute;c phong c&aacute;ch trang tr&iacute; kh&aacute;c nhau.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch c&oacute; thể c&oacute; c&aacute;c v&acirc;n đ&aacute; tự nhi&ecirc;n hoặc hoa văn m&ocirc; phỏng v&acirc;n đ&aacute;, tạo điểm nhấn v&agrave; sự độc đ&aacute;o cho kh&ocirc;ng gian.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">2. K&iacute;ch thước:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">K&iacute;ch thước của gạch thường được thiết kế để ph&ugrave; hợp với c&aacute;c y&ecirc;u cầu l&aacute;t nền v&agrave; tường kh&aacute;c nhau, thường c&oacute; c&aacute;c phi&ecirc;n bản k&iacute;ch thước như 600x600mm, 800x800mm hoặc 600x1200mm.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">3. Chất liệu v&agrave; đặc điểm kỹ thuật:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch TKG G68987 thường được sản xuất từ gốm sứ hoặc gạch men, c&oacute; đặc t&iacute;nh chịu lực tốt, chống trầy xước v&agrave; dễ vệ sinh.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Bề mặt của gạch c&oacute; thể l&agrave; b&oacute;ng, mờ hoặc nh&aacute;m, t&ugrave;y thuộc v&agrave;o y&ecirc;u cầu của dự &aacute;n v&agrave; sở th&iacute;ch c&aacute; nh&acirc;n.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">4. Ứng dụng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch TKG G68987 th&iacute;ch hợp để l&aacute;t nền v&agrave; tường trong c&aacute;c kh&ocirc;ng gian nội thất như ph&ograve;ng kh&aacute;ch, nh&agrave; bếp, ph&ograve;ng ngủ, ph&ograve;ng tắm, cũng như c&aacute;c khu vực thương mại như cửa h&agrave;ng, văn ph&ograve;ng, nh&agrave; h&agrave;ng, v&agrave; kh&aacute;ch sạn.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Sản phẩm n&agrave;y cũng c&oacute; thể được sử dụng trong c&aacute;c dự &aacute;n x&acirc;y dựng mới hoặc cải tạo, bao gồm cả những khu vực c&oacute; y&ecirc;u cầu về chịu lực v&agrave; độ bền cao.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">5. Ưu điểm:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch TKG G68987 từ d&ograve;ng sản phẩm Onyx Stone Series cung cấp vẻ đẹp tự nhi&ecirc;n v&agrave; sang trọng của đ&aacute; Onyx, nhưng với t&iacute;nh linh hoạt v&agrave; dễ d&agrave;ng trong việc lắp đặt v&agrave; bảo dưỡng của gạch men.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">M&agrave;u sắc Grey (x&aacute;m) trung t&iacute;nh v&agrave; dễ phối hợp, phản &aacute;nh &aacute;nh s&aacute;ng tốt v&agrave; tạo cảm gi&aacute;c thoải m&aacute;i cho kh&ocirc;ng gian.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, gạch TKG (Taicera) G68987 từ d&ograve;ng sản phẩm Onyx Stone Series m&agrave;u Grey l&agrave; một lựa chọn l&yacute; tưởng cho việc trang tr&iacute; nội thất v&agrave; ngoại thất, mang lại vẻ đẹp tự nhi&ecirc;n v&agrave; hiện đại cho mọi kh&ocirc;ng gian.</span></span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '11.jpg',
            'price'=>'300000',
            'product_type_id'=>3,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Tấm mica gương',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt">M&Ocirc; TẢ </span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt">SẢN PHẨM</span></u></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Tấm mica gương l&agrave; một loại vật liệu trang tr&iacute; phổ biến được l&agrave;m từ mica, một loại nhựa tổng hợp trong suốt c&oacute; độ bền v&agrave; độ b&oacute;ng tốt. Khi được sản xuất đặc biệt, tấm mica c&oacute; thể tạo ra hiệu ứng gương, tức l&agrave; khi nh&igrave;n v&agrave;o bề mặt của n&oacute;, bạn sẽ thấy h&igrave;nh ảnh phản chiếu như gương thật.</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về tấm mica gương:</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">1. Chất liệu:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Tấm mica gương được l&agrave;m từ mica, một loại nhựa tổng hợp trong suốt v&agrave; dẻo dai. Đặc điểm của mica l&agrave; c&oacute; khả năng phản chiếu &aacute;nh s&aacute;ng tốt, giống như gương thực sự.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">2. Đặc điểm vật l&yacute;:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Tấm mica gương c&oacute; bề mặt phẳng v&agrave; b&oacute;ng, tạo ra hiệu ứng phản chiếu r&otilde; r&agrave;ng khi chiếu s&aacute;ng l&ecirc;n.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Chất liệu mica thường nhẹ v&agrave; dễ cắt, uốn cong, hoặc gia c&ocirc;ng th&agrave;nh c&aacute;c h&igrave;nh dạng v&agrave; k&iacute;ch thước kh&aacute;c nhau.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">3. Ứng dụng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Tấm mica gương thường được sử dụng trong trang tr&iacute; nội thất v&agrave; ngoại thất, như l&agrave;m tấm phản chiếu cho c&aacute;c tấm lưng kệ, bề mặt của b&agrave;n, tấm trang tr&iacute; cho cửa ra v&agrave;o, hoặc tạo c&aacute;c mảng trang tr&iacute; đặc biệt.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; cũng thường được sử dụng trong ng&agrave;nh quảng c&aacute;o để tạo ra c&aacute;c biển quảng c&aacute;o hoặc biển hiệu c&oacute; hiệu ứng gương.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">4. Ưu điểm:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Mica gương c&oacute; gi&aacute; th&agrave;nh thấp hơn so với gương thực sự, nhưng vẫn tạo ra hiệu ứng phản chiếu tương tự như gương.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; nhẹ v&agrave; dễ cắt, l&agrave;m cho việc gia c&ocirc;ng v&agrave; lắp đặt trở n&ecirc;n đơn giản v&agrave; linh hoạt hơn so với gương thủy tinh.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">5. Bảo dưỡng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Tấm mica gương dễ d&agrave;ng vệ sinh bằng c&aacute;ch lau ch&ugrave;i với nước ấm v&agrave; một &iacute;t dung dịch rửa ch&eacute;n nhẹ nh&agrave;ng để loại bỏ bụi v&agrave; vết bẩn.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Tr&aacute;nh sử dụng c&aacute;c dung dịch c&oacute; chứa cồn hoặc dung m&ocirc;i mạnh c&oacute; thể l&agrave;m hỏng bề mặt phản chiếu của mica.</span></span></span></li>
            </ul>
            ',
            'img'=> '12.jpg',
            'price'=>'1200000',
            'product_type_id'=>3,
            'status' => 1
        ]);
        //Cửa sổ và cửa
        DB::table('products')->insert([
            'name' => 'Cửa Gỗ Công Nghiệp Mdf Sơn PU',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt">M&Ocirc; TẢ </span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt">SẢN PHẨM</span></u></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa Gỗ C&ocirc;ng Nghiệp MDF Sơn PU l&agrave; một loại cửa được l&agrave;m từ vật liệu gỗ c&ocirc;ng nghiệp MDF (Medium Density Fiberboard) v&agrave; được sơn bằng lớp sơn Polyurethane (PU). Đ&acirc;y l&agrave; một lựa chọn phổ biến trong trang tr&iacute; nội thất do t&iacute;nh linh hoạt v&agrave; độ bền cao. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về cửa gỗ c&ocirc;ng nghiệp MDF sơn PU:</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">1. Chất liệu:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">MDF (Medium Density Fiberboard) l&agrave; loại vật liệu gỗ c&ocirc;ng nghiệp được l&agrave;m từ sợi gỗ tự nhi&ecirc;n kết hợp với keo n&eacute;n chịu nhiệt v&agrave; &aacute;p lực cao. MDF thường c&oacute; độ d&agrave;y đồng nhất v&agrave; bề mặt phẳng.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Lớp sơn PU (Polyurethane) l&agrave; một loại sơn bền, c&oacute; độ b&oacute;ng cao, v&agrave; kh&aacute;ng nước tốt. Sơn PU thường được sử dụng để bảo vệ bề mặt gỗ v&agrave; tạo ra vẻ đẹp mịn m&agrave;ng v&agrave; sang trọng.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">2. Đặc điểm kỹ thuật:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa gỗ MDF thường c&oacute; độ d&agrave;y từ 25mm đến 40mm, t&ugrave;y thuộc v&agrave;o y&ecirc;u cầu cụ thể của dự &aacute;n.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Lớp sơn PU thường được &aacute;p dụng một c&aacute;ch cẩn thận v&agrave; đều đặn tr&ecirc;n bề mặt cửa, tạo ra một lớp phủ bảo vệ chống trầy xước v&agrave; chịu nước.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">3. M&agrave;u sắc v&agrave; hoa văn:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa gỗ MDF sơn PU c&oacute; thể được sản xuất trong nhiều m&agrave;u sắc kh&aacute;c nhau, từ m&agrave;u trắng đến m&agrave;u gỗ tự nhi&ecirc;n hoặc m&agrave;u sắc đa dạng kh&aacute;c.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Hoa văn v&agrave; chi tiết trang tr&iacute; c&oacute; thể được th&ecirc;m v&agrave;o bề mặt cửa để tạo ra điểm nhấn v&agrave; phong c&aacute;ch ri&ecirc;ng biệt cho kh&ocirc;ng gian trang tr&iacute;.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">4. Ứng dụng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa gỗ MDF sơn PU th&iacute;ch hợp cho việc lắp đặt trong c&aacute;c kh&ocirc;ng gian nội thất như ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ, nh&agrave; bếp v&agrave; ph&ograve;ng tắm.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; cũng c&oacute; thể được sử dụng trong c&aacute;c dự &aacute;n thương mại như văn ph&ograve;ng, cửa h&agrave;ng, nh&agrave; h&agrave;ng v&agrave; kh&aacute;ch sạn.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">5. Ưu điểm:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa gỗ MDF sơn PU c&oacute; độ bền cao, kh&ocirc;ng bị cong v&ecirc;nh hoặc nứt nẻ dưới t&aacute;c động của thời tiết hoặc độ ẩm.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Sơn PU tạo ra một bề mặt mịn m&agrave;ng v&agrave; b&oacute;ng, dễ d&agrave;ng vệ sinh v&agrave; bảo quản.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, cửa gỗ c&ocirc;ng nghiệp MDF sơn PU l&agrave; một lựa chọn th&ocirc;ng minh v&agrave; tiết kiệm cho việc trang tr&iacute; nội thất, mang lại vẻ đẹp v&agrave; độ bền trong thời gian d&agrave;i.</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Top of Form</span></span></span></p>
            ',
            'img'=> '13.jpg',
            'price'=>'1600000',
            'product_type_id'=>4,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Cửa Nhựa Đài Loan Ghép Thanh',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt">M&Ocirc; TẢ </span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt">SẢN PHẨM</span></u></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa Nhựa Đ&agrave;i Loan Gh&eacute;p Thanh l&agrave; một loại cửa được l&agrave;m từ nhựa PVC (Polyvinyl Chloride) nhập khẩu từ Đ&agrave;i Loan v&agrave; c&oacute; cấu tr&uacute;c gh&eacute;p thanh. Đ&acirc;y l&agrave; một giải ph&aacute;p trang tr&iacute; nội thất phổ biến v&agrave; tiết kiệm về chi ph&iacute;. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về cửa n&agrave;y:</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">1. Chất liệu:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa được l&agrave;m từ nhựa PVC, một loại vật liệu nhựa tổng hợp c&oacute; đặc t&iacute;nh chịu lực, chống m&agrave;i m&ograve;n, v&agrave; chống thấm nước tốt. Nhựa PVC c&ograve;n dễ d&agrave;ng trong việc gia c&ocirc;ng v&agrave; bảo dưỡng.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">2. Cấu tr&uacute;c gh&eacute;p thanh:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa c&oacute; cấu tr&uacute;c gh&eacute;p thanh, tức l&agrave; c&aacute;c thanh nhựa được gh&eacute;p lại với nhau để tạo th&agrave;nh bề mặt của cửa. Cấu tr&uacute;c n&agrave;y tạo ra một vẻ đẹp hiện đại v&agrave; tinh tế cho cửa.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">3. M&agrave;u sắc v&agrave; hoa văn:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa nhựa PVC gh&eacute;p thanh c&oacute; thể được sản xuất trong nhiều m&agrave;u sắc kh&aacute;c nhau, từ m&agrave;u trắng, x&aacute;m đến c&aacute;c m&agrave;u gỗ tự nhi&ecirc;n hoặc m&agrave;u sắc đa dạng kh&aacute;c.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">C&oacute; thể c&oacute; c&aacute;c hoa văn v&agrave; chi tiết trang tr&iacute; tr&ecirc;n bề mặt cửa để tạo ra điểm nhấn v&agrave; phong c&aacute;ch ri&ecirc;ng biệt cho kh&ocirc;ng gian trang tr&iacute;.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">4. Đặc điểm kỹ thuật:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa nhựa Đ&agrave;i Loan gh&eacute;p thanh c&oacute; độ d&agrave;y từ 25mm đến 40mm, t&ugrave;y thuộc v&agrave;o y&ecirc;u cầu cụ thể của dự &aacute;n v&agrave; k&iacute;ch thước cửa.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Bề mặt cửa thường được gia c&ocirc;ng mịn m&agrave;ng v&agrave; b&oacute;ng, tạo ra một vẻ đẹp v&agrave; độ bền cao.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">5. Ứng dụng:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa nhựa Đ&agrave;i Loan gh&eacute;p thanh th&iacute;ch hợp cho việc lắp đặt trong c&aacute;c kh&ocirc;ng gian nội thất như ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ, nh&agrave; bếp v&agrave; ph&ograve;ng tắm.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; cũng c&oacute; thể được sử dụng trong c&aacute;c dự &aacute;n thương mại như văn ph&ograve;ng, cửa h&agrave;ng, nh&agrave; h&agrave;ng v&agrave; kh&aacute;ch sạn.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">6. Ưu điểm:</span></strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa nhựa PVC gh&eacute;p thanh c&oacute; độ bền cao, kh&ocirc;ng bị cong v&ecirc;nh hoặc nứt nẻ dưới t&aacute;c động của thời tiết hoặc độ ẩm.</span></span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Nhựa PVC dễ vệ sinh v&agrave; bảo quản, chỉ cần lau ch&ugrave;i định kỳ để giữ cho bề mặt cửa lu&ocirc;n s&aacute;ng b&oacute;ng.</span></span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, cửa nhựa Đ&agrave;i Loan gh&eacute;p thanh l&agrave; một lựa chọn phổ biến v&agrave; tiết kiệm cho việc trang tr&iacute; nội thất, mang lại vẻ đẹp v&agrave; độ bền trong thời gian d&agrave;i.</span></span></span></p>
            ',
            'img'=> '14.jpg',
            'price'=>'2000000',
            'product_type_id'=>4,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Cửa Nhôm Kính Phòng Ngủ',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><u><span style="font-size:20.0pt">M&Ocirc; TẢ </span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt">SẢN PHẨM</span></u></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa nh&ocirc;m k&iacute;nh ph&ograve;ng ngủ l&agrave; một loại cửa được l&agrave;m từ khung nh&ocirc;m kết hợp với tấm k&iacute;nh, được thiết kế đặc biệt để sử dụng trong c&aacute;c kh&ocirc;ng gian ph&ograve;ng ngủ. Đ&acirc;y l&agrave; một giải ph&aacute;p trang tr&iacute; nội thất phổ biến v&agrave; hiện đại, mang lại sự th&ocirc;ng tho&aacute;ng v&agrave; &aacute;nh s&aacute;ng tự nhi&ecirc;n cho kh&ocirc;ng gian. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về cửa nh&ocirc;m k&iacute;nh ph&ograve;ng ngủ:</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">1. Khung Nh&ocirc;m:</span></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Khung của cửa được l&agrave;m từ nh&ocirc;m, một loại vật liệu nhẹ, bền, kh&ocirc;ng bị ăn m&ograve;n v&agrave; dễ d&agrave;ng trong việc gia c&ocirc;ng. Khung nh&ocirc;m thường được thiết kế chắc chắn v&agrave; đảm bảo t&iacute;nh cơ động cho việc mở cửa v&agrave; đ&oacute;ng cửa.</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">2. Tấm K&iacute;nh:</span></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Tấm k&iacute;nh l&agrave; phần ch&iacute;nh của cửa, mang lại sự trong suốt v&agrave; th&ocirc;ng tho&aacute;ng cho kh&ocirc;ng gian. C&aacute;c loại k&iacute;nh phổ biến được sử dụng cho cửa nh&ocirc;m k&iacute;nh ph&ograve;ng ngủ bao gồm k&iacute;nh cường lực, k&iacute;nh Low-E (k&iacute;nh c&aacute;ch nhiệt), v&agrave; k&iacute;nh phản chiếu &aacute;nh s&aacute;ng.</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">3. M&agrave;u sắc v&agrave; Thiết kế:</span></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa nh&ocirc;m k&iacute;nh ph&ograve;ng ngủ c&oacute; thể được thiết kế với nhiều lựa chọn m&agrave;u sắc kh&aacute;c nhau, từ m&agrave;u trắng, x&aacute;m đến m&agrave;u đen hoặc c&aacute;c m&agrave;u sắc kh&aacute;c t&ugrave;y thuộc v&agrave;o phong c&aacute;ch v&agrave; sở th&iacute;ch c&aacute; nh&acirc;n.</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Thiết kế của cửa c&oacute; thể đa dạng, từ cửa mở 1 c&aacute;nh đơn giản đến cửa mở tự động hoặc cửa sổ trượt.</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">4. Ưu điểm:</span></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa nh&ocirc;m k&iacute;nh ph&ograve;ng ngủ mang lại sự th&ocirc;ng tho&aacute;ng, &aacute;nh s&aacute;ng tự nhi&ecirc;n v&agrave; cảm gi&aacute;c mở rộng cho kh&ocirc;ng gian ph&ograve;ng ngủ.</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Khung nh&ocirc;m chắc chắn v&agrave; kh&ocirc;ng bị ăn m&ograve;n, kết hợp với tấm k&iacute;nh chịu lực v&agrave; c&aacute;ch nhiệt, tạo ra một cửa c&oacute; độ bền cao v&agrave; khả năng c&aacute;ch &acirc;m tốt.</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong><span style="font-family:&quot;Times New Roman&quot;,serif">5. Ứng dụng:</span></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa nh&ocirc;m k&iacute;nh ph&ograve;ng ngủ th&iacute;ch hợp cho việc sử dụng trong c&aacute;c căn hộ, nh&agrave; ở, biệt thự hoặc c&aacute;c dự &aacute;n kh&aacute;ch sạn v&agrave; căn hộ cao cấp.</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; c&oacute; thể được sử dụng cho cửa ra v&agrave;o, cửa sổ, hoặc cửa điều h&ograve;a kh&ocirc;ng kh&iacute; trong ph&ograve;ng ngủ.</span></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, cửa nh&ocirc;m k&iacute;nh ph&ograve;ng ngủ l&agrave; một lựa chọn th&ocirc;ng minh v&agrave; hiện đại cho việc trang tr&iacute; nội thất, mang lại sự thoải m&aacute;i v&agrave; tiện &iacute;ch cho kh&ocirc;ng gian sống.</span></span></span></p>

            ',
            'img'=> '15.jpg',
            'price'=>'0',
            'product_type_id'=>4,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Cửa Thép Vân Gỗ Galaxy 4 Cánh GLX-4CK-3',
            'description'=> '<h1 style="text-align:center"><span style="font-size:16pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#2f5496"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></span></h1>

            <p><br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa Th&eacute;p V&acirc;n Gỗ Galaxy 4 C&aacute;nh GLX-4CK-3 l&agrave; một loại cửa được l&agrave;m từ th&eacute;p v&agrave; m&ocirc; phỏng v&acirc;n gỗ, thuộc d&ograve;ng sản phẩm Galaxy. Đ&acirc;y l&agrave; một lựa chọn phổ biến trong trang tr&iacute; nội thất với sự kết hợp giữa độ bền của th&eacute;p v&agrave; vẻ đẹp tự nhi&ecirc;n của v&acirc;n gỗ. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về cửa n&agrave;y:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>1. Chất liệu:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa được l&agrave;m từ th&eacute;p, một loại vật liệu chắc chắn, bền bỉ v&agrave; dễ bảo tr&igrave;. Th&eacute;p được sơn tĩnh điện để tăng t&iacute;nh chống rỉ v&agrave; chống trầy xước.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>2. M&ocirc; phỏng v&acirc;n gỗ:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">V&acirc;n gỗ được m&ocirc; phỏng tr&ecirc;n bề mặt cửa, tạo ra vẻ đẹp tự nhi&ecirc;n v&agrave; sang trọng nhưng kh&ocirc;ng cần bảo dưỡng như gỗ thực sự. C&aacute;c v&acirc;n gỗ c&oacute; thể l&agrave; c&aacute;c loại gỗ tự nhi&ecirc;n phổ biến như sồi, gỗ cao su, hoặc v&acirc;n gỗ tổng hợp.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>3. Thiết kế c&aacute;nh cửa:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa Galaxy 4 c&aacute;nh GLX-4CK-3 được thiết kế với 4 c&aacute;nh cửa, tạo ra một lối đi rộng lớn v&agrave; mang lại cảm gi&aacute;c ấn tượng khi mở cửa.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Thiết kế c&aacute;nh cửa c&oacute; thể c&oacute; c&aacute;c chi tiết trang tr&iacute; như c&aacute;c đường n&eacute;t, ph&ugrave; đi&ecirc;u hoặc c&aacute;c phụ kiện trang tr&iacute; kh&aacute;c tạo điểm nhấn cho cửa.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>4. M&agrave;u sắc:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa thường được sản xuất với nhiều m&agrave;u sắc kh&aacute;c nhau, từ m&agrave;u gỗ tự nhi&ecirc;n đến c&aacute;c t&ocirc;ng m&agrave;u hiện đại như trắng, đen, x&aacute;m, hoặc n&acirc;u.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>5. Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa Th&eacute;p V&acirc;n Gỗ Galaxy 4 C&aacute;nh GLX-4CK-3 th&iacute;ch hợp cho việc lắp đặt trong c&aacute;c kh&ocirc;ng gian nội thất như ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ, nh&agrave; bếp hoặc ph&ograve;ng l&agrave;m việc.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; cũng c&oacute; thể được sử dụng trong c&aacute;c dự &aacute;n thương mại như c&aacute;c cửa h&agrave;ng, văn ph&ograve;ng, v&agrave; c&aacute;c khu chung cư cao cấp.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>6. Ưu điểm:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa th&eacute;p v&acirc;n gỗ c&oacute; độ bền cao v&agrave; chịu được &aacute;p lực lớn, kh&ocirc;ng bị cong v&ecirc;nh hay biến dạng dưới t&aacute;c động của thời tiết.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Kh&ocirc;ng cần bảo dưỡng như gỗ thực sự, v&acirc;n gỗ được m&ocirc; phỏng tr&ecirc;n th&eacute;p gi&uacute;p giữ cho cửa lu&ocirc;n đẹp mắt v&agrave; mới mẻ.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, cửa Th&eacute;p V&acirc;n Gỗ Galaxy 4 C&aacute;nh GLX-4CK-3 l&agrave; một lựa chọn đa dạng v&agrave; hiện đại cho việc trang tr&iacute; nội thất, mang lại sự kết hợp ho&agrave;n hảo giữa độ bền của th&eacute;p v&agrave; vẻ đẹp tự nhi&ecirc;n của v&acirc;n gỗ</span></span></p>

            ',
            'img'=> '16.jpg',
            'price'=>'0',
            'product_type_id'=>4,
            'status' => 1
        ]);
        // Điện nước
        DB::table('products')->insert([
            'name' => 'Dây Điện Đơn Cadivi CV 6.0 mm2',
            'description'=> '<h1 style="text-align:center"><span style="font-size:16pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#2f5496"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></span></h1>

            <p><br />
            <br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">D&acirc;y điện đơn Cadivi CV 6.0 mm&sup2; l&agrave; một loại d&acirc;y dẫn điện được sản xuất bởi C&ocirc;ng ty TNHH C&aacute;p Điện Việt Nam (Cadivi) với ti&ecirc;u chuẩn chất lượng cao. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về d&acirc;y n&agrave;y:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>1. K&iacute;ch thước:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">D&acirc;y điện Cadivi CV 6.0 mm&sup2; c&oacute; tiết diện l&agrave; 6.0 mm&sup2;, đ&acirc;y l&agrave; th&ocirc;ng số cho ph&eacute;p d&ograve;ng điện lớn c&oacute; thể truyền qua d&acirc;y m&agrave; kh&ocirc;ng g&acirc;y qu&aacute; tải hay tỏa nhiệt.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>2. Chất liệu:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">D&acirc;y điện n&agrave;y được l&agrave;m từ l&otilde;i dẫn bằng đồng nguy&ecirc;n chất, với t&iacute;nh dẫn điện tốt v&agrave; khả năng chịu nhiệt cao.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Vỏ bọc của d&acirc;y thường l&agrave; nhựa PVC chống ch&aacute;y v&agrave; chịu được c&aacute;c điều kiện m&ocirc;i trường khắc nghiệt.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>3. Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">D&acirc;y điện Cadivi CV 6.0 mm&sup2; thường được sử dụng trong hệ thống điện gia dụng v&agrave; c&ocirc;ng nghiệp, đặc biệt l&agrave; trong c&aacute;c c&ocirc;ng tr&igrave;nh x&acirc;y dựng, nh&agrave; ở, văn ph&ograve;ng, nh&agrave; m&aacute;y...</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&oacute; thể sử dụng cho việc lắp đặt c&aacute;c thiết bị điện như ổ cắm, c&ocirc;ng tắc, đ&egrave;n, m&aacute;y lạnh, m&aacute;y giặt, v&agrave; c&aacute;c thiết bị điện kh&aacute;c.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>4. Ti&ecirc;u chuẩn chất lượng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">D&acirc;y điện Cadivi CV 6.0 mm&sup2; đ&aacute;p ứng c&aacute;c ti&ecirc;u chuẩn chất lượng quốc gia v&agrave; quốc tế như Ti&ecirc;u chuẩn TCVN, IEC, v&agrave; c&aacute;c ti&ecirc;u chuẩn an to&agrave;n điện.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>5. Ưu điểm:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">D&acirc;y điện Cadivi CV 6.0 mm&sup2; c&oacute; khả năng chịu tải cao, đảm bảo truyền dẫn điện hiệu quả m&agrave; kh&ocirc;ng g&acirc;y ra hiện tượng tỏa nhiệt hay mất điện &aacute;p.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Chất lượng v&agrave; độ tin cậy cao, gi&uacute;p bảo đảm an to&agrave;n cho hệ thống điện v&agrave; thiết bị điện trong qu&aacute; tr&igrave;nh sử dụng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>6. Lưu &yacute;:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Trước khi sử dụng, cần kiểm tra kỹ lưỡng d&acirc;y điện để đảm bảo kh&ocirc;ng c&oacute; hỏng h&oacute;c n&agrave;o g&acirc;y nguy hiểm.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Việc lắp đặt v&agrave; sử dụng d&acirc;y điện cần tu&acirc;n thủ c&aacute;c quy định an to&agrave;n điện v&agrave; quy định kỹ thuật địa phương.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, d&acirc;y điện đơn Cadivi CV 6.0 mm&sup2; l&agrave; một lựa chọn đ&aacute;ng tin cậy cho việc truyền dẫn điện trong c&aacute;c hệ thống điện gia dụng v&agrave; c&ocirc;ng nghiệp, đảm bảo hiệu suất v&agrave; an to&agrave;n cao.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '17.jpg',
            'price'=>'0',
            'product_type_id'=>5,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Ống HDPE',
            'description'=> '<h1 style="text-align:center"><span style="font-size:16pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#2f5496"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></span></h1>

            <p><br />
            <br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ống HDPE l&agrave; loại ống được sản xuất từ polyethylene cao cấp c&oacute; mật độ cao (HDPE - High-Density Polyethylene). Đ&acirc;y l&agrave; một vật liệu nhựa c&oacute; t&iacute;nh linh hoạt, chịu được &aacute;p lực cao v&agrave; kh&aacute;ng h&oacute;a chất, thường được sử dụng rộng r&atilde;i trong c&aacute;c ứng dụng đường ống vận chuyển nước v&agrave; h&oacute;a chất. Dưới đ&acirc;y l&agrave; một số th&ocirc;ng tin chi tiết về ống HDPE:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>1. Đặc điểm kỹ thuật:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">HDPE l&agrave; một loại nhựa c&oacute; đặc t&iacute;nh chịu được nhiệt độ cao v&agrave; thấp, chịu được va đập v&agrave; k&eacute;o căng tốt.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ống HDPE thường c&oacute; t&iacute;nh linh hoạt cao, c&oacute; thể uốn cong m&agrave; kh&ocirc;ng bị g&atilde;y hoặc biến dạng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Chất liệu HDPE c&oacute; khả năng chống ăn m&ograve;n v&agrave; t&aacute;c động của h&oacute;a chất, chịu được ăn m&ograve;n từ axit, kiềm v&agrave; c&aacute;c dung m&ocirc;i hữu cơ.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>2. Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ống HDPE được sử dụng rộng r&atilde;i trong c&aacute;c ứng dụng vận chuyển nước, bao gồm cả nước uống v&agrave; nước thải.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; cũng thường được sử dụng trong hệ thống dẫn dầu v&agrave; kh&iacute; đốt, hệ thống đường ống cấp nước tưới ti&ecirc;u trong n&ocirc;ng nghiệp, hệ thống tho&aacute;t nước mưa, v&agrave; c&aacute;c ứng dụng c&ocirc;ng nghiệp kh&aacute;c.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>3. Ưu điểm:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ống HDPE c&oacute; khả năng chống ăn m&ograve;n v&agrave; t&aacute;c động h&oacute;a chất tốt, giảm thiểu rủi ro &ocirc; nhiễm nước.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Vật liệu HDPE c&oacute; tuổi thọ d&agrave;i, &iacute;t bị ảnh hưởng bởi m&ocirc;i trường ngoại vi v&agrave; kh&ocirc;ng gỉ s&eacute;t như c&aacute;c loại ống kim loại.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; cũng dễ d&agrave;ng v&agrave; nhanh ch&oacute;ng trong việc lắp đặt v&agrave; bảo tr&igrave;, giảm thiểu chi ph&iacute; v&agrave; thời gian thi c&ocirc;ng so với c&aacute;c loại ống kh&aacute;c.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>4. Lưu &yacute;:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Trước khi sử dụng ống HDPE, cần kiểm tra kỹ lưỡng để đảm bảo kh&ocirc;ng c&oacute; c&aacute;c vết trầy xước hoặc hỏng h&oacute;c n&agrave;o g&acirc;y ảnh hưởng đến t&iacute;nh chất cơ học v&agrave; chất lượng nước.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Việc lắp đặt v&agrave; sử dụng ống HDPE cần tu&acirc;n thủ c&aacute;c quy định v&agrave; ti&ecirc;u chuẩn kỹ thuật li&ecirc;n quan đến an to&agrave;n v&agrave; bảo vệ m&ocirc;i trường.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, ống HDPE l&agrave; một lựa chọn phổ biến v&agrave; hiệu quả cho c&aacute;c ứng dụng vận chuyển nước v&agrave; h&oacute;a chất trong c&aacute;c hệ thống cấp v&agrave; tho&aacute;t nước, nhờ v&agrave;o t&iacute;nh linh hoạt, độ bền cao v&agrave; khả năng chống ăn m&ograve;n của n&oacute;.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '18.jpg',
            'price'=>'0',
            'product_type_id'=>5,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Công Tắc Panasonic đảo chiều',
            'description'=> '<h1 style="text-align:center"><span style="font-size:16pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#2f5496"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></span></h1>

            <p><br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&ocirc;ng tắc Panasonic đảo chiều l&agrave; một loại c&ocirc;ng tắc điện được sản xuất bởi Panasonic, một trong những thương hiệu h&agrave;ng đầu trong lĩnh vực thiết bị điện. C&ocirc;ng tắc đảo chiều cho ph&eacute;p điều khiển một đ&egrave;n hoặc một thiết bị điện từ hai vị tr&iacute; kh&aacute;c nhau, th&ocirc;ng qua việc thay đổi trạng th&aacute;i điện của n&oacute;. Dưới đ&acirc;y l&agrave; một số th&ocirc;ng tin chi tiết về c&ocirc;ng tắc Panasonic đảo chiều:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>1. Chức năng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&ocirc;ng tắc đảo chiều được sử dụng để điều khiển một đ&egrave;n hoặc một thiết bị điện từ hai vị tr&iacute; kh&aacute;c nhau, cho ph&eacute;p bật/tắt hoặc thay đổi trạng th&aacute;i của thiết bị từ cả hai đầu m&uacute;t của c&ocirc;ng tắc.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>2. Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&ocirc;ng tắc Panasonic đảo chiều thường c&oacute; hai n&uacute;t nhấn hoặc cần gạt, mỗi n&uacute;t/cần tương ứng với một vị tr&iacute; điều khiển kh&aacute;c nhau.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Mặt trước của c&ocirc;ng tắc thường được thiết kế với c&aacute;c k&yacute; hiệu hoặc biểu tượng cho ph&eacute;p người d&ugrave;ng dễ d&agrave;ng nhận biết trạng th&aacute;i hoạt động của thiết bị.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>3. Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&ocirc;ng tắc đảo chiều thường được sử dụng trong c&aacute;c hệ thống chiếu s&aacute;ng trong nh&agrave;, nơi cần điều khiển &aacute;nh s&aacute;ng từ hai vị tr&iacute; kh&aacute;c nhau, chẳng hạn như từ cửa ra v&agrave;o hoặc từ hai điểm điều khiển kh&aacute;c nhau trong c&ugrave;ng một ph&ograve;ng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; cũng c&oacute; thể được sử dụng trong c&aacute;c hệ thống điều khiển m&aacute;y m&oacute;c hoặc thiết bị điện kh&aacute;c đ&ograve;i hỏi điều khiển từ nhiều vị tr&iacute;.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>4. Ưu điểm:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&ocirc;ng tắc đảo chiều mang lại sự linh hoạt trong việc điều khiển thiết bị từ nhiều vị tr&iacute; kh&aacute;c nhau m&agrave; kh&ocirc;ng cần phải đi đến nơi đặt c&ocirc;ng tắc ch&iacute;nh.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; cũng gi&uacute;p tăng cường tiện &iacute;ch v&agrave; tiết kiệm điện năng trong việc sử dụng &aacute;nh s&aacute;ng hoặc thiết bị điện.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>5. Lưu &yacute;:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Việc lắp đặt v&agrave; sử dụng c&ocirc;ng tắc Panasonic đảo chiều cần tu&acirc;n thủ c&aacute;c quy định an to&agrave;n v&agrave; ti&ecirc;u chuẩn kỹ thuật để đảm bảo hoạt động an to&agrave;n v&agrave; hiệu quả của hệ thống điện.</span></span></li>
            </ul>
            ',
            'img'=> '19.jpg',
            'price'=>'0',
            'product_type_id'=>5,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Chậu rửa bát 1 hố mầu ghi xám BRODA kèm vòi thác tiện dụng kích thước lớn 78x46cm',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Chậu rửa b&aacute;t 1 hố m&agrave;u ghi x&aacute;m BRODA k&egrave;m v&ograve;i th&aacute;c tiện dụng l&agrave; một sản phẩm thiết bị vệ sinh trong nh&agrave; bếp, thường được sử dụng để rửa c&aacute;c vật dụng như b&aacute;t đĩa, chảo, đũa v&agrave; dao. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>1. Chất liệu:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Chậu rửa b&aacute;t BRODA được l&agrave;m từ vật liệu chất lượng cao như th&eacute;p kh&ocirc;ng gỉ (stainless steel), đảm bảo độ bền v&agrave; chịu được va đập v&agrave; trầy xước trong qu&aacute; tr&igrave;nh sử dụng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">M&agrave;u sắc chủ đạo của chậu l&agrave; ghi x&aacute;m, tạo cảm gi&aacute;c sang trọng v&agrave; dễ phối hợp với nhiều loại nội thất kh&aacute;c nhau.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>2. Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Chậu c&oacute; một hố lớn, đủ rộng để chứa nhiều đồ d&ugrave;ng v&agrave; tiện lợi cho việc rửa sạch.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">V&ograve;i th&aacute;c tiện dụng được t&iacute;ch hợp sẵn gi&uacute;p nước chảy mạnh v&agrave; đều, gi&uacute;p tiết kiệm nước v&agrave; l&agrave;m sạch hiệu quả.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">K&iacute;ch thước lớn của chậu (78x46cm) tạo ra kh&ocirc;ng gian rửa rộng r&atilde;i v&agrave; thoải m&aacute;i.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>3. Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Chậu rửa b&aacute;t BRODA th&iacute;ch hợp cho việc lắp đặt trong c&aacute;c nh&agrave; bếp gia đ&igrave;nh, nh&agrave; h&agrave;ng, kh&aacute;ch sạn, căn tin c&ocirc;ng nghiệp v&agrave; c&aacute;c kh&ocirc;ng gian nấu ăn chuy&ecirc;n nghiệp kh&aacute;c.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; cũng c&oacute; thể được sử dụng trong c&aacute;c kh&ocirc;ng gian rửa ch&eacute;n v&agrave; rửa tay c&ocirc;ng cộng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>4. Ưu điểm:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Chất liệu th&eacute;p kh&ocirc;ng gỉ chống ăn m&ograve;n v&agrave; dễ vệ sinh, giữ cho chậu lu&ocirc;n s&aacute;ng b&oacute;ng v&agrave; mới mẻ sau mỗi lần sử dụng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Thiết kế đơn giản nhưng tiện lợi v&agrave; hiệu quả, gi&uacute;p người d&ugrave;ng dễ d&agrave;ng v&agrave; nhanh ch&oacute;ng trong qu&aacute; tr&igrave;nh rửa v&agrave; l&agrave;m sạch đồ d&ugrave;ng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>5. Lưu &yacute;:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Trước khi lắp đặt, cần đảm bảo rằng nơi lắp đặt c&oacute; đủ kh&ocirc;ng gian v&agrave; hỗ trợ cần thiết cho việc kết nối với hệ thống cấp nước v&agrave; tho&aacute;t nước.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Việc lắp đặt v&agrave; sử dụng sản phẩm cần tu&acirc;n thủ c&aacute;c quy định v&agrave; hướng dẫn của nh&agrave; sản xuất để đảm bảo an to&agrave;n v&agrave; hiệu quả.</span></span></li>
            </ul>

            <p>&nbsp;</p>
            ',
            'img'=> '20.jpg',
            'price'=>'3150000',
            'product_type_id'=>5,
            'status' => 1
        ]);
        // Nội Thất
        //Đệm và nệm
        DB::table('products')->insert([
            'name' => 'Nệm lò xo túi Tatana Hana Cool Plus',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Nệm l&ograve; xo t&uacute;i Tatana Hana Cool Plus l&agrave; một sản phẩm nệm cao cấp của thương hiệu Tatana, được thiết kế để mang lại sự thoải m&aacute;i v&agrave; hỗ trợ tối đa cho giấc ngủ của bạn. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>1. Cấu tr&uacute;c:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Nệm được l&agrave;m từ l&ograve; xo t&uacute;i (Pocket Spring) chất lượng cao, mỗi l&ograve; xo được bọc ri&ecirc;ng biệt trong t&uacute;i vải, gi&uacute;p hỗ trợ cơ thể một c&aacute;ch đều đặn v&agrave; giảm thiểu sự chuyển động từ ph&iacute;a b&ecirc;n kia nệm.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Lớp đệm được l&agrave;m từ c&aacute;c loại vật liệu tho&aacute;ng kh&iacute; v&agrave; đ&agrave;n hồi như b&ocirc;ng g&ograve;n, bọt biển, v&agrave; lớp l&oacute;t chống vi khuẩn, gi&uacute;p tạo ra sự thoải m&aacute;i v&agrave; sự hấp thụ nhiệt tốt.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>2. C&ocirc;ng nghệ l&agrave;m m&aacute;t:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">T&iacute;nh năng Hana Cool Plus gi&uacute;p điều chỉnh nhiệt độ của nệm, giữ cho bạn lu&ocirc;n cảm thấy m&aacute;t mẻ v&agrave; thoải m&aacute;i v&agrave;o m&ugrave;a h&egrave; v&agrave; ấm &aacute;p v&agrave;o m&ugrave;a đ&ocirc;ng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&ocirc;ng nghệ n&agrave;y thường sử dụng c&aacute;c lớp đệm chất liệu cao cấp kết hợp với c&aacute;c loại vải th&ocirc;ng tho&aacute;ng để tăng cường sự lưu th&ocirc;ng kh&ocirc;ng kh&iacute; v&agrave; hấp thụ nhiệt hiệu quả.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>3. Kiểu d&aacute;ng v&agrave; k&iacute;ch thước:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Nệm Tatana Hana Cool Plus c&oacute; thiết kế mềm mại v&agrave; &ecirc;m &aacute;i, ph&ugrave; hợp với nhiều loại cơ thể v&agrave; vị tr&iacute; ngủ.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Thường c&oacute; nhiều k&iacute;ch thước kh&aacute;c nhau để ph&ugrave; hợp với nhu cầu v&agrave; kh&ocirc;ng gian của bạn, từ k&iacute;ch thước đơn, đ&ocirc;i, đến c&aacute;c k&iacute;ch thước lớn hơn như queen v&agrave; king size.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>4. Ưu điểm:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">L&ograve; xo t&uacute;i gi&uacute;p giảm thiểu tiếng ồn v&agrave; sự chuyển động từ ph&iacute;a b&ecirc;n kia nệm, tạo ra giấc ngủ kh&ocirc;ng bị gi&aacute;n đoạn v&agrave; thoải m&aacute;i.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">T&iacute;nh năng l&agrave;m m&aacute;t gi&uacute;p giảm điểm n&oacute;ng v&agrave; giữ cho cơ thể lu&ocirc;n m&aacute;t mẻ v&agrave; thoải m&aacute;i, đặc biệt l&agrave; trong những ng&agrave;y n&oacute;ng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>5. Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Nệm Tatana Hana Cool Plus th&iacute;ch hợp cho cả gia đ&igrave;nh, từ người lớn đến trẻ em, v&agrave; cũng ph&ugrave; hợp cho việc sử dụng trong c&aacute;c ph&ograve;ng ngủ kh&aacute;ch sạn hoặc căn hộ cho thu&ecirc;.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; được sử dụng trong c&aacute;c kh&ocirc;ng gian ngủ ch&iacute;nh v&agrave; ph&ograve;ng kh&aacute;ch để tạo ra kh&ocirc;ng gian nghỉ ngơi thoải m&aacute;i v&agrave; tiện nghi.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, nệm l&ograve; xo t&uacute;i Tatana Hana Cool Plus l&agrave; một lựa chọn tốt cho những ai đang t&igrave;m kiếm sự thoải m&aacute;i v&agrave; hỗ trợ tối ưu cho giấc ngủ của m&igrave;nh, đặc biệt l&agrave; trong m&ocirc;i trường nhiệt đới n&oacute;ng bức.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '21.jpg',
            'price'=> '7749000',
            'product_type_id'=>6,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Nệm Lò Xo Perfect Vạn Thành',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Nệm L&ograve; Xo Perfect Vạn Th&agrave;nh l&agrave; một sản phẩm nệm cao cấp của thương hiệu Vạn Th&agrave;nh, c&oacute; xuất xứ từ Việt Nam. Đ&acirc;y l&agrave; một loại nệm sử dụng c&ocirc;ng nghệ l&ograve; xo t&uacute;i để cung cấp sự hỗ trợ vững chắc v&agrave; thoải m&aacute;i cho giấc ngủ. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>1. Cấu tr&uacute;c:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Nệm L&ograve; Xo Perfect Vạn Th&agrave;nh sử dụng l&ograve; xo t&uacute;i (Pocket Spring) chất lượng cao, mỗi l&ograve; xo được bọc ri&ecirc;ng biệt trong t&uacute;i vải, gi&uacute;p hỗ trợ cơ thể một c&aacute;ch đều đặn v&agrave; giảm thiểu sự chuyển động từ ph&iacute;a b&ecirc;n kia nệm.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Lớp đệm được l&agrave;m từ c&aacute;c vật liệu chất lượng như b&ocirc;ng g&ograve;n, bọt biển, v&agrave; cao su tự nhi&ecirc;n, tạo cảm gi&aacute;c &ecirc;m &aacute;i v&agrave; thoải m&aacute;i.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>2. Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Nệm Perfect Vạn Th&agrave;nh thường c&oacute; thiết kế mềm mại, &ecirc;m &aacute;i v&agrave; độ d&agrave;y vừa phải, ph&ugrave; hợp với nhiều loại cơ thể v&agrave; vị tr&iacute; ngủ.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Bề mặt của nệm thường được bọc lớp vải chất lượng cao, c&oacute; khả năng tho&aacute;ng kh&iacute; v&agrave; hấp thụ mồ h&ocirc;i tốt.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>3. Kiểu d&aacute;ng v&agrave; k&iacute;ch thước:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Nệm Perfect Vạn Th&agrave;nh c&oacute; nhiều k&iacute;ch thước kh&aacute;c nhau để ph&ugrave; hợp với nhu cầu v&agrave; kh&ocirc;ng gian của bạn, từ k&iacute;ch thước đơn, đ&ocirc;i, queen đến king size.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Thường c&oacute; c&aacute;c phi&ecirc;n bản m&agrave;u sắc kh&aacute;c nhau để ph&ugrave; hợp với phong c&aacute;ch trang tr&iacute; nội thất của căn ph&ograve;ng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>4. Ưu điểm:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Sự kết hợp giữa l&ograve; xo t&uacute;i v&agrave; lớp đệm chất lượng cao gi&uacute;p tạo ra một bề mặt ngủ vững chắc, thoải m&aacute;i v&agrave; hỗ trợ tốt cho cơ thể.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Nệm c&oacute; khả năng giảm tiếng ồn v&agrave; chuyển động từ ph&iacute;a b&ecirc;n kia nệm, gi&uacute;p người d&ugrave;ng c&oacute; giấc ngủ s&acirc;u v&agrave; kh&ocirc;ng bị gi&aacute;n đoạn.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>5. Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Nệm Perfect Vạn Th&agrave;nh th&iacute;ch hợp cho cả gia đ&igrave;nh, từ người lớn đến trẻ em, v&agrave; cũng ph&ugrave; hợp cho việc sử dụng trong c&aacute;c kh&aacute;ch sạn, nh&agrave; h&agrave;ng hoặc căn hộ cho thu&ecirc;.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; được sử dụng trong c&aacute;c kh&ocirc;ng gian ngủ ch&iacute;nh v&agrave; ph&ograve;ng kh&aacute;ch để tạo ra kh&ocirc;ng gian nghỉ ngơi thoải m&aacute;i v&agrave; tiện nghi.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, nệm l&ograve; xo Perfect Vạn Th&agrave;nh l&agrave; một lựa chọn tốt cho những ai đang t&igrave;m kiếm sự thoải m&aacute;i v&agrave; hỗ trợ tốt cho giấc ngủ của m&igrave;nh, với sự kết hợp giữa c&ocirc;ng nghệ l&ograve; xo t&uacute;i v&agrave; chất liệu đệm chất lượng cao.</span></span></p>

            <p>&nbsp;</p>
            ',
            'price'=>'3562000',
            'img'=> '22.jpg',
            'product_type_id'=>6,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Nệm cao su em bé Liên Á Bambino',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Nệm cao su em b&eacute; Li&ecirc;n &Aacute; Bambino l&agrave; một sản phẩm chất lượng cao được thiết kế đặc biệt d&agrave;nh cho trẻ sơ sinh v&agrave; em b&eacute;. Đ&acirc;y l&agrave; loại nệm sử dụng chất liệu cao su tự nhi&ecirc;n, c&oacute; độ đ&agrave;n hồi tốt v&agrave; khả năng tho&aacute;ng kh&iacute;, gi&uacute;p tạo điều kiện ngủ thoải m&aacute;i v&agrave; an to&agrave;n cho b&eacute;. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>1. Chất liệu:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Nệm cao su em b&eacute; Li&ecirc;n &Aacute; Bambino được l&agrave;m từ cao su tự nhi&ecirc;n, l&agrave; một nguy&ecirc;n liệu ho&agrave;n to&agrave;n tự nhi&ecirc;n, kh&ocirc;ng chứa c&aacute;c chất độc hại, an to&agrave;n cho sức khỏe của trẻ sơ sinh v&agrave; em b&eacute;.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Chất liệu cao su tự nhi&ecirc;n cung cấp độ đ&agrave;n hồi tốt, gi&uacute;p nệm đ&agrave;n hồi dẻo v&agrave; &ocirc;m s&aacute;t cơ thể của b&eacute;.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>2. Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Nệm Li&ecirc;n &Aacute; Bambino thường c&oacute; thiết kế mềm mại, &ecirc;m &aacute;i v&agrave; độ d&agrave;y vừa phải, ph&ugrave; hợp với c&acirc;n nặng v&agrave; vị tr&iacute; nằm của trẻ nhỏ.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Bề mặt của nệm thường được thiết kế c&oacute; c&aacute;c r&atilde;nh th&ocirc;ng hơi hoặc lỗ th&ocirc;ng kh&iacute; nhỏ, gi&uacute;p tăng khả năng tho&aacute;ng kh&iacute; v&agrave; hấp thụ mồ h&ocirc;i, giữ cho b&eacute; lu&ocirc;n kh&ocirc; r&aacute;o v&agrave; thoải m&aacute;i.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>3. K&iacute;ch thước:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Nệm cao su em b&eacute; Li&ecirc;n &Aacute; Bambino thường c&oacute; k&iacute;ch thước nhỏ gọn v&agrave; ph&ugrave; hợp với c&aacute;c k&iacute;ch thước chuẩn cho cũi, giường cũi hoặc giường ngủ của trẻ sơ sinh v&agrave; em b&eacute;.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>4. Ưu điểm:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Sử dụng chất liệu cao su tự nhi&ecirc;n, kh&ocirc;ng chứa c&aacute;c chất h&oacute;a học độc hại, an to&agrave;n cho sức khỏe của trẻ nhỏ.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Thiết kế mềm mại, &ecirc;m &aacute;i v&agrave; tho&aacute;ng kh&iacute; gi&uacute;p tạo điều kiện ngủ tốt nhất cho b&eacute;, gi&uacute;p b&eacute; c&oacute; giấc ngủ s&acirc;u v&agrave; ngon.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>5. Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Nệm cao su em b&eacute; Li&ecirc;n &Aacute; Bambino th&iacute;ch hợp để sử dụng trong cũi, giường cũi hoặc giường ngủ của trẻ sơ sinh v&agrave; em b&eacute;, tạo ra kh&ocirc;ng gian ngủ an to&agrave;n v&agrave; thoải m&aacute;i nhất cho b&eacute;.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, nệm cao su em b&eacute; Li&ecirc;n &Aacute; Bambino l&agrave; một lựa chọn tốt v&agrave; an to&agrave;n cho sức khỏe của trẻ sơ sinh v&agrave; em b&eacute;, với chất liệu cao su tự nhi&ecirc;n v&agrave; thiết kế thoải m&aacute;i, &ecirc;m &aacute;i.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '23.jpg',
            'price'=>'3562000',
            'product_type_id'=>6,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Đệm lò xo Spine O Master Dunlopillo',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đệm l&ograve; xo Spine O Master Dunlopillo l&agrave; một sản phẩm cao cấp của thương hiệu Dunlopillo, nổi tiếng với chất lượng v&agrave; thiết kế đẳng cấp. Sản phẩm n&agrave;y kết hợp giữa c&ocirc;ng nghệ l&ograve; xo v&agrave; c&aacute;c lớp đệm cao cấp, nhằm mang lại sự hỗ trợ v&agrave; thoải m&aacute;i tối đa cho giấc ngủ của người d&ugrave;ng. Dưới đ&acirc;y l&agrave; một số th&ocirc;ng tin chi tiết về đệm l&ograve; xo Spine O Master Dunlopillo:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>1. Cấu tr&uacute;c:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Sản phẩm sử dụng l&ograve; xo t&uacute;i (Pocket Spring) chất lượng cao, mỗi l&ograve; xo được bọc ri&ecirc;ng biệt trong t&uacute;i vải, gi&uacute;p hỗ trợ cơ thể một c&aacute;ch đều đặn v&agrave; giảm thiểu sự chuyển động từ ph&iacute;a b&ecirc;n kia nệm.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&aacute;c lớp đệm được l&agrave;m từ c&aacute;c vật liệu cao cấp như bọt biển, b&ocirc;ng g&ograve;n, cao su tự nhi&ecirc;n, gi&uacute;p tạo ra một bề mặt ngủ thoải m&aacute;i v&agrave; &ecirc;m &aacute;i.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>2. Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Thiết kế của đệm Spine O Master thường tinh tế v&agrave; sang trọng, với c&aacute;c đường n&eacute;t chăm ch&uacute;t v&agrave; tỉ mỉ.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Bề mặt của đệm thường được bọc lớp vải chất lượng cao, c&oacute; khả năng tho&aacute;ng kh&iacute; v&agrave; h&uacute;t ẩm tốt, giữ cho giấc ngủ lu&ocirc;n m&aacute;t mẻ v&agrave; thoải m&aacute;i.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>3. C&ocirc;ng nghệ hỗ trợ cột sống:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&ocirc;ng nghệ Spine O Master của Dunlopillo được thiết kế đặc biệt để hỗ trợ cột sống, gi&uacute;p giảm thiểu đau nhức v&agrave; căng thẳng trong khi ngủ.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&aacute;c l&ograve; xo t&uacute;i cung cấp hỗ trợ điểm cao cấp, gi&uacute;p tạo ra một bề mặt ngủ vững chắc v&agrave; thoải m&aacute;i cho cơ thể.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>4. Ưu điểm:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Sản phẩm Dunlopillo Spine O Master cung cấp sự kết hợp ho&agrave;n hảo giữa hỗ trợ v&agrave; thoải m&aacute;i, gi&uacute;p người d&ugrave;ng c&oacute; một giấc ngủ s&acirc;u v&agrave; ngon.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Thiết kế chất lượng cao v&agrave; c&ocirc;ng nghệ ti&ecirc;n tiến gi&uacute;p đảm bảo sự bền bỉ v&agrave; độ bền của sản phẩm.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>5. Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đệm Spine O Master th&iacute;ch hợp cho cả gia đ&igrave;nh, từ người lớn đến trẻ em, v&agrave; cũng ph&ugrave; hợp cho việc sử dụng trong c&aacute;c kh&aacute;ch sạn, nh&agrave; h&agrave;ng hoặc căn hộ cho thu&ecirc;.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; được sử dụng trong c&aacute;c kh&ocirc;ng gian ngủ ch&iacute;nh v&agrave; ph&ograve;ng kh&aacute;ch để tạo ra kh&ocirc;ng gian nghỉ ngơi thoải m&aacute;i v&agrave; tiện nghi.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, đệm l&ograve; xo Spine O Master Dunlopillo l&agrave; một lựa chọn l&yacute; tưởng cho những người đang t&igrave;m kiếm sự hỗ trợ v&agrave; thoải m&aacute;i tối đa cho giấc ngủ của m&igrave;nh, với sự kết hợp giữa c&ocirc;ng nghệ l&ograve; xo v&agrave; c&aacute;c lớp đệm cao cấp.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '24.jpg',
            'price'=>'8410000',
            'product_type_id'=>6,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Đệm lò xo Hanvico túi 3 viền Indiana',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <br />
            <br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đệm l&ograve; xo Hanvico t&uacute;i 3 viền Indiana l&agrave; một sản phẩm đệm cao cấp của thương hiệu Hanvico, được thiết kế để mang lại sự thoải m&aacute;i v&agrave; hỗ trợ tối ưu cho giấc ngủ của bạn. Sản phẩm n&agrave;y sử dụng c&ocirc;ng nghệ l&ograve; xo t&uacute;i kết hợp với c&aacute;c lớp đệm chất lượng, tạo ra một bề mặt ngủ vững chắc v&agrave; thoải m&aacute;i. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về đệm l&ograve; xo Hanvico t&uacute;i 3 viền Indiana:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>1. Cấu tr&uacute;c:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Sản phẩm sử dụng l&ograve; xo t&uacute;i (Pocket Spring) chất lượng cao, mỗi l&ograve; xo được bọc ri&ecirc;ng biệt trong t&uacute;i vải, gi&uacute;p hỗ trợ cơ thể một c&aacute;ch đều đặn v&agrave; giảm thiểu sự chuyển động từ ph&iacute;a b&ecirc;n kia nệm.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&aacute;c lớp đệm được l&agrave;m từ c&aacute;c vật liệu cao cấp như bọt biển, b&ocirc;ng g&ograve;n, v&agrave; cao su tự nhi&ecirc;n, gi&uacute;p tạo ra một bề mặt ngủ mềm mại v&agrave; thoải m&aacute;i.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>2. Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đệm Hanvico t&uacute;i 3 viền Indiana thường c&oacute; thiết kế sang trọng v&agrave; tinh tế, với ba viền đ&iacute;nh ở c&aacute;c cạnh, tạo điểm nhấn cho sản phẩm.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Bề mặt của đệm thường được bọc lớp vải cao cấp, c&oacute; khả năng tho&aacute;ng kh&iacute; v&agrave; h&uacute;t ẩm tốt, giữ cho giấc ngủ lu&ocirc;n m&aacute;t mẻ v&agrave; thoải m&aacute;i.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>3. Hỗ trợ v&agrave; thoải m&aacute;i:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&ocirc;ng nghệ l&ograve; xo t&uacute;i 3 viền cung cấp hỗ trợ điểm cao cấp, gi&uacute;p cột sống được duy tr&igrave; ở vị tr&iacute; tự nhi&ecirc;n trong khi ngủ, giảm thiểu đau nhức v&agrave; căng thẳng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&aacute;c lớp đệm cao cấp tạo ra một bề mặt ngủ &ecirc;m &aacute;i v&agrave; thoải m&aacute;i, gi&uacute;p người d&ugrave;ng c&oacute; một giấc ngủ s&acirc;u v&agrave; ngon.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>4. Ưu điểm:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Sản phẩm Hanvico t&uacute;i 3 viền Indiana kết hợp giữa hỗ trợ v&agrave; thoải m&aacute;i, gi&uacute;p người d&ugrave;ng c&oacute; một trải nghiệm ngủ tốt nhất.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Thiết kế chất lượng cao v&agrave; c&ocirc;ng nghệ ti&ecirc;n tiến gi&uacute;p đảm bảo sự bền bỉ v&agrave; độ bền của sản phẩm.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>5. Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đệm Hanvico t&uacute;i 3 viền Indiana th&iacute;ch hợp cho cả gia đ&igrave;nh, từ người lớn đến trẻ em, v&agrave; cũng ph&ugrave; hợp cho việc sử dụng trong c&aacute;c kh&aacute;ch sạn, nh&agrave; h&agrave;ng hoặc căn hộ cho thu&ecirc;.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; được sử dụng trong c&aacute;c kh&ocirc;ng gian ngủ ch&iacute;nh v&agrave; ph&ograve;ng kh&aacute;ch để tạo ra kh&ocirc;ng gian nghỉ ngơi thoải m&aacute;i v&agrave; tiện nghi.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, đệm l&ograve; xo Hanvico t&uacute;i 3 viền Indiana l&agrave; một lựa chọn l&yacute; tưởng cho những ai đang t&igrave;m kiếm sự hỗ trợ v&agrave; thoải m&aacute;i tối đa cho giấc ngủ của m&igrave;nh, với sự kết hợp giữa c&ocirc;ng nghệ l&ograve; xo t&uacute;i v&agrave; c&aacute;c lớp đệm cao cấp.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '25.jpg',
            'price'=>'6944000',
            'product_type_id'=>6,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Đệm lò xo Dunlopillo túi độc lập Royal Kensington',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đệm l&ograve; xo Dunlopillo t&uacute;i độc lập Royal Kensington l&agrave; một sản phẩm cao cấp của thương hiệu Dunlopillo, nổi tiếng với chất lượng v&agrave; sự đẳng cấp. Sản phẩm n&agrave;y được thiết kế với c&ocirc;ng nghệ l&ograve; xo t&uacute;i độc lập, cung cấp hỗ trợ tối ưu cho cột sống v&agrave; cơ thể, c&ugrave;ng với sự thoải m&aacute;i v&agrave; &ecirc;m &aacute;i. Dưới đ&acirc;y l&agrave; một số th&ocirc;ng tin chi tiết về đệm l&ograve; xo Dunlopillo t&uacute;i độc lập Royal Kensington:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>1. Cấu tr&uacute;c:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Sản phẩm sử dụng c&ocirc;ng nghệ l&ograve; xo t&uacute;i độc lập, mỗi l&ograve; xo được bọc ri&ecirc;ng biệt trong t&uacute;i vải, gi&uacute;p hỗ trợ cơ thể một c&aacute;ch đều đặn v&agrave; giảm thiểu sự chuyển động từ ph&iacute;a b&ecirc;n kia nệm.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Lớp đệm được l&agrave;m từ c&aacute;c vật liệu cao cấp như bọt biển, b&ocirc;ng g&ograve;n, v&agrave; cao su tự nhi&ecirc;n, tạo ra một bề mặt ngủ &ecirc;m &aacute;i v&agrave; thoải m&aacute;i.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>2. Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Thiết kế của đệm Royal Kensington thường l&agrave; sự kết hợp giữa sự sang trọng v&agrave; chức năng, với c&aacute;c đường n&eacute;t chăm ch&uacute;t v&agrave; tỉ mỉ.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Bề mặt của đệm thường được bọc lớp vải cao cấp, c&oacute; khả năng tho&aacute;ng kh&iacute; v&agrave; h&uacute;t ẩm tốt, giữ cho giấc ngủ lu&ocirc;n m&aacute;t mẻ v&agrave; thoải m&aacute;i.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>3. Hỗ trợ cột sống:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&ocirc;ng nghệ l&ograve; xo t&uacute;i độc lập cung cấp hỗ trợ điểm cao cấp, gi&uacute;p cột sống được duy tr&igrave; ở vị tr&iacute; tự nhi&ecirc;n trong khi ngủ, giảm thiểu đau nhức v&agrave; căng thẳng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Điều n&agrave;y gi&uacute;p cung cấp giấc ngủ s&acirc;u v&agrave; hồi phục hiệu quả cho cơ thể.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>4. Ưu điểm:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Sản phẩm Dunlopillo Royal Kensington mang lại sự kết hợp ho&agrave;n hảo giữa hỗ trợ v&agrave; thoải m&aacute;i, gi&uacute;p người d&ugrave;ng c&oacute; một trải nghiệm ngủ tốt nhất.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Thiết kế chất lượng cao v&agrave; c&ocirc;ng nghệ ti&ecirc;n tiến gi&uacute;p đảm bảo sự bền bỉ v&agrave; độ bền của sản phẩm.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>5. Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đệm Royal Kensington th&iacute;ch hợp cho cả gia đ&igrave;nh, từ người lớn đến trẻ em, v&agrave; cũng ph&ugrave; hợp cho việc sử dụng trong c&aacute;c kh&aacute;ch sạn, nh&agrave; h&agrave;ng hoặc căn hộ cho thu&ecirc;.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">N&oacute; được sử dụng trong c&aacute;c kh&ocirc;ng gian ngủ ch&iacute;nh v&agrave; ph&ograve;ng kh&aacute;ch để tạo ra kh&ocirc;ng gian nghỉ ngơi thoải m&aacute;i v&agrave; tiện nghi.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">T&oacute;m lại, đệm l&ograve; xo Dunlopillo t&uacute;i độc lập Royal Kensington l&agrave; một lựa chọn l&yacute; tưởng cho những ai đang t&igrave;m kiếm sự hỗ trợ v&agrave; thoải m&aacute;i tối đa cho giấc ngủ của m&igrave;nh, với sự kết hợp giữa c&ocirc;ng nghệ l&ograve; xo t&uacute;i độc lập v&agrave; c&aacute;c lớp đệm cao cấp.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '26.jpg',
            'price'=>'50613000',
            'product_type_id'=>6,
            'status' => 1
        ]);
        //Bàn ghế
        DB::table('products')->insert([
            'name' => 'Bàn Ghế Gỗ Salon Hương Đá Chạm Đào Tay',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Dường như sản phẩm bạn đề cập đến l&agrave; một bộ b&agrave;n ghế gỗ salon cao cấp được l&agrave;m từ gỗ hương v&agrave; c&oacute; c&aacute;c chi tiết được chạm trổ bằng đ&aacute;, với tay ghế được chạm khắc tỉ mỉ.</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>B&agrave;n:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu:</strong> Gỗ hương, một loại gỗ qu&yacute; hiếm c&oacute; m&agrave;u sắc ấm &aacute;p v&agrave; m&ugrave;i thơm đặc trưng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế:</strong> B&agrave;n c&oacute; thể c&oacute; c&aacute;c họa tiết chạm trổ hoa văn hoặc h&igrave;nh ảnh truyền thống, tạo n&ecirc;n vẻ đẹp sang trọng v&agrave; cổ điển.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>K&iacute;ch thước:</strong> Tuỳ thuộc v&agrave;o m&ocirc; h&igrave;nh v&agrave; thiết kế cụ thể, nhưng thường c&oacute; k&iacute;ch thước ph&ugrave; hợp với kh&ocirc;ng gian sử dụng v&agrave; t&iacute;nh thẩm mỹ.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Bề mặt:</strong> Thường được phủ lớp sơn hoặc sơn PU để bảo vệ v&agrave; l&agrave;m cho bề mặt trở n&ecirc;n b&oacute;ng mịn.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Ghế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu:</strong> Cũng l&agrave; gỗ hương, c&oacute; thể được chế t&aacute;c th&agrave;nh c&aacute;c h&igrave;nh dạng v&agrave; kiểu d&aacute;ng kh&aacute;c nhau.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế:</strong> Ghế thường c&oacute; c&aacute;c đường n&eacute;t mềm mại v&agrave; cong v&uacute;t, tạo cảm gi&aacute;c thoải m&aacute;i v&agrave; &ecirc;m &aacute;i cho người sử dụng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Tay ghế:</strong> Đặc biệt l&agrave; điểm nhấn của sản phẩm, c&oacute; thể được chạm khắc hoa văn hoặc họa tiết trang tr&iacute;, tạo điểm nhấn nghệ thuật cho bộ đồ nội thất.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chạm trổ đ&aacute;:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Loại đ&aacute;:</strong> Thường l&agrave; đ&aacute; tự nhi&ecirc;n như đ&aacute; marble, granite hoặc c&aacute;c loại đ&aacute; qu&yacute; kh&aacute;c.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chi tiết:</strong> C&aacute;c họa tiết hoặc h&igrave;nh ảnh được chạm trổ tr&ecirc;n c&aacute;c bề mặt của b&agrave;n v&agrave; ghế, thường l&agrave; những h&igrave;nh ảnh hoa l&aacute;, hoặc c&aacute;c mẫu trang tr&iacute; truyền thống.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Đ&agrave;o tay:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu:</strong> Được l&agrave;m từ gỗ hoặc c&oacute; thể l&agrave; c&aacute;c loại vật liệu kh&aacute;c như kim loại hoặc đ&aacute;.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chức năng:</strong> Đ&agrave;o tay được đ&iacute;nh k&egrave;m hoặc t&iacute;ch hợp v&agrave;o c&aacute;c chi tiết của b&agrave;n hoặc ghế, thường l&agrave;m tăng t&iacute;nh thẩm mỹ v&agrave; gi&aacute; trị nghệ thuật của sản phẩm.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Những chi tiết n&agrave;y gi&uacute;p tạo ra một bộ đồ nội thất salon sang trọng v&agrave; độc đ&aacute;o, thường l&agrave; điểm nhấn trong kh&ocirc;ng gian nơi ch&uacute;ng được đặt.</span></span></p>
            ',
            'img'=> '27.jpg',
            'price'=>'40000000',
            'product_type_id'=>7,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Bàn Làm Việc Tích Hợp Kệ Sách Tiện Lợi Gỗ MDF Chống Ẩm Màu Sồi',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">B&agrave;n L&agrave;m Việc T&iacute;ch Hợp Kệ S&aacute;ch Tiện Lợi Gỗ MDF Chống Ẩm M&agrave;u Sồi l&agrave; một lựa chọn tuyệt vời cho kh&ocirc;ng gian l&agrave;m việc hoặc học tập tại nh&agrave;. Dưới đ&acirc;y l&agrave; một m&ocirc; tả chi tiết của sản phẩm n&agrave;y:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Gỗ MDF: MDF l&agrave; viết tắt của Medium Density Fiberboard, l&agrave; một loại vật liệu gỗ nh&acirc;n tạo được l&agrave;m từ sợi gỗ &eacute;p lại với keo nhiệt. Đ&acirc;y l&agrave; một vật liệu phổ biến trong sản xuất đồ nội thất v&igrave; khả năng chống cong v&ecirc;nh v&agrave; giữ h&igrave;nh d&aacute;ng tốt.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>T&iacute;nh năng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>B&agrave;n l&agrave;m việc:</strong> B&agrave;n c&oacute; k&iacute;ch thước ph&ugrave; hợp để sử dụng l&agrave;m kh&ocirc;ng gian l&agrave;m việc c&aacute; nh&acirc;n. Bề mặt b&agrave;n được phủ lớp laminate chống ẩm v&agrave; chống trầy xước, gi&uacute;p bảo vệ bề mặt v&agrave; dễ d&agrave;ng vệ sinh.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Kệ s&aacute;ch t&iacute;ch hợp:</strong> Sản phẩm đi k&egrave;m với kệ s&aacute;ch được t&iacute;ch hợp ngay b&ecirc;n dưới bề mặt b&agrave;n, gi&uacute;p tận dụng kh&ocirc;ng gian hiệu quả v&agrave; tạo ra kh&ocirc;ng gian lưu trữ cho s&aacute;ch, t&agrave;i liệu v&agrave; vật dụng học tập.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>M&agrave;u sắc:</strong> M&agrave;u sồi tự nhi&ecirc;n tạo cảm gi&aacute;c ấm &aacute;p v&agrave; hiện đại cho kh&ocirc;ng gian l&agrave;m việc.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">B&agrave;n được thiết kế đơn giản nhưng tiện &iacute;ch, ph&ugrave; hợp với nhiều kh&ocirc;ng gian v&agrave; phong c&aacute;ch trang tr&iacute;.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Kệ s&aacute;ch được t&iacute;ch hợp s&aacute;t v&agrave;o bề mặt b&agrave;n, tạo điểm nhấn v&agrave; tăng t&iacute;nh thẩm mỹ cho sản phẩm.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&aacute;c cạnh v&agrave; g&oacute;c của sản phẩm thường được bo tr&ograve;n để tr&aacute;nh c&aacute;c vết thương t&iacute;ch.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>K&iacute;ch thước:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">K&iacute;ch thước của b&agrave;n v&agrave; kệ s&aacute;ch th&iacute;ch hợp cho kh&ocirc;ng gian l&agrave;m việc c&aacute; nh&acirc;n trong ph&ograve;ng ngủ, ph&ograve;ng kh&aacute;ch, hoặc văn ph&ograve;ng nhỏ.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chống ẩm:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">B&agrave;n được l&agrave;m từ gỗ MDF chống ẩm, gi&uacute;p ngăn chặn sự hấp thụ nước v&agrave; giảm nguy cơ cong v&ecirc;nh khi tiếp x&uacute;c với m&ocirc;i trường ẩm ướt.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">B&agrave;n L&agrave;m Việc T&iacute;ch Hợp Kệ S&aacute;ch Tiện Lợi Gỗ MDF Chống Ẩm M&agrave;u Sồi l&agrave; một lựa chọn th&ocirc;ng minh v&agrave; tiện lợi cho kh&ocirc;ng gian l&agrave;m việc c&aacute; nh&acirc;n, mang lại sự tiện &iacute;ch v&agrave; thẩm mỹ.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '28.jpg',
            'price'=>'7400000',
            'product_type_id'=>7,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Bàn Họp Chân Sắt Mặt Gỗ Tự Nhiên',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">B&agrave;n Họp Ch&acirc;n Sắt Mặt Gỗ Tự Nhi&ecirc;n l&agrave; một lựa chọn hiện đại v&agrave; đa dạng cho kh&ocirc;ng gian họp hoặc l&agrave;m việc trong c&aacute;c văn ph&ograve;ng v&agrave; c&ocirc;ng ty. Dưới đ&acirc;y l&agrave; một m&ocirc; tả chi tiết của sản phẩm n&agrave;y:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Mặt b&agrave;n:</strong> Gỗ tự nhi&ecirc;n: Sử dụng gỗ tự nhi&ecirc;n mang lại vẻ đẹp tự nhi&ecirc;n v&agrave; độ bền cao. Gỗ tự nhi&ecirc;n thường c&oacute; c&aacute;c v&acirc;n gỗ v&agrave; m&agrave;u sắc độc đ&aacute;o, tạo n&ecirc;n sự ấn tượng v&agrave; sang trọng cho kh&ocirc;ng gian l&agrave;m việc.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Ch&acirc;n b&agrave;n:</strong> Sắt: Ch&acirc;n b&agrave;n được l&agrave;m từ sắt, c&oacute; thể l&agrave; sắt th&eacute;p hoặc sắt đ&uacute;c, tạo ra sự chắc chắn v&agrave; ổn định cho b&agrave;n.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>T&iacute;nh năng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>B&agrave;n họp:</strong> B&agrave;n c&oacute; k&iacute;ch thước lớn v&agrave; ph&ugrave; hợp để sử dụng trong c&aacute;c buổi họp nh&oacute;m hoặc l&agrave;m việc nh&oacute;m. Mặt b&agrave;n rộng r&atilde;i cung cấp kh&ocirc;ng gian đủ cho nhiều người tham gia.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế:</strong> Thiết kế đơn giản nhưng hiện đại, ph&ugrave; hợp với nhiều phong c&aacute;ch trang tr&iacute; văn ph&ograve;ng. Sự kết hợp giữa gỗ tự nhi&ecirc;n v&agrave; ch&acirc;n sắt tạo ra sự h&agrave;i h&ograve;a giữa tự nhi&ecirc;n v&agrave; c&ocirc;ng nghệ.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Đa dạng k&iacute;ch thước:</strong> C&oacute; thể c&oacute; nhiều k&iacute;ch thước kh&aacute;c nhau để ph&ugrave; hợp với kh&ocirc;ng gian v&agrave; nhu cầu sử dụng cụ thể của từng văn ph&ograve;ng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">B&agrave;n thường c&oacute; mặt b&agrave;n phẳng v&agrave; c&aacute;c g&oacute;c cạnh được bo tr&ograve;n để đảm bảo an to&agrave;n v&agrave; sự thoải m&aacute;i khi sử dụng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ch&acirc;n b&agrave;n thường được thiết kế sao cho đủ chắc chắn v&agrave; ổn định, đồng thời tạo điểm nhấn cho sự mạnh mẽ v&agrave; c&ocirc;ng nghiệp của sản phẩm.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ph&ugrave; hợp cho kh&ocirc;ng gian họp, ph&ograve;ng l&agrave;m việc nh&oacute;m, hoặc kh&ocirc;ng gian l&agrave;m việc chung trong văn ph&ograve;ng, c&ocirc;ng ty.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&oacute; thể sử dụng cho c&aacute;c buổi thảo luận, hội nghị, hoặc l&agrave;m việc đồng đội.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">B&agrave;n Họp Ch&acirc;n Sắt Mặt Gỗ Tự Nhi&ecirc;n kết hợp giữa vẻ đẹp tự nhi&ecirc;n của gỗ v&agrave; sự mạnh mẽ của sắt, tạo ra một sản phẩm đẹp mắt v&agrave; chắc chắn, ph&ugrave; hợp cho c&aacute;c kh&ocirc;ng gian l&agrave;m việc chuy&ecirc;n nghiệp.</span></span></p>

            <p>&nbsp;</p>

            <p>&quot;</p>
            ',
            'img'=> '29.jpg',
            'price'=>'3600000',
            'product_type_id'=>7,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Ghế Ăn Nệm Nhập Khẩu Sang Trọng-Mã: 2121',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ghế Ăn Nệm Nhập Khẩu Sang Trọng, m&atilde; sản phẩm 2121, l&agrave; một lựa chọn tuyệt vời cho kh&ocirc;ng gian ăn hoặc ph&ograve;ng kh&aacute;ch trong nh&agrave;. Dưới đ&acirc;y l&agrave; một m&ocirc; tả chi tiết của sản phẩm n&agrave;y:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Khung ghế:</strong> C&oacute; thể l&agrave; gỗ tự nhi&ecirc;n, gỗ c&ocirc;ng nghiệp hoặc kim loại, tạo ra sự chắc chắn v&agrave; độ bền cho ghế.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Nệm ghế:</strong> Nệm được l&agrave;m từ chất liệu tho&aacute;ng kh&iacute; v&agrave; &ecirc;m &aacute;i, cung cấp sự thoải m&aacute;i cho người sử dụng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>T&iacute;nh năng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Sang trọng v&agrave; đẳng cấp:</strong> Thiết kế của ghế c&oacute; vẻ ngo&agrave;i sang trọng v&agrave; đẳng cấp, ph&ugrave; hợp với nhiều phong c&aacute;ch trang tr&iacute; nội thất.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Nệm &ecirc;m &aacute;i:</strong> Nệm ghế được thiết kế với lớp đệm đủ d&agrave;y, tạo cảm gi&aacute;c thoải m&aacute;i v&agrave; &ecirc;m &aacute;i khi ngồi.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Nhập khẩu:</strong> Sản phẩm được nhập khẩu từ c&aacute;c quốc gia c&oacute; nền c&ocirc;ng nghiệp sản xuất nội thất ph&aacute;t triển, đảm bảo chất lượng v&agrave; kiểu d&aacute;ng tốt.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Kiểu d&aacute;ng:</strong> C&oacute; thể c&oacute; nhiều kiểu d&aacute;ng kh&aacute;c nhau, từ kiểu truyền thống đến kiểu hiện đại, ph&ugrave; hợp với sở th&iacute;ch v&agrave; nhu cầu sử dụng của từng gia đ&igrave;nh.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>M&atilde; số sản phẩm:</strong> M&atilde; số 2121 gi&uacute;p x&aacute;c định sản phẩm cụ thể trong bộ sưu tập hoặc cửa h&agrave;ng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>M&agrave;u sắc:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Thường c&oacute; sẵn trong c&aacute;c m&agrave;u sắc phổ biến như trắng, đen, n&acirc;u, hoặc x&aacute;m, tạo sự linh hoạt cho việc phối m&agrave;u với kh&ocirc;ng gian trang tr&iacute; nội thất.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ph&ugrave; hợp cho ph&ograve;ng ăn gia đ&igrave;nh, ph&ograve;ng ăn nh&agrave; h&agrave;ng, hoặc kh&ocirc;ng gian nghỉ ngơi trong nh&agrave;.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&oacute; thể sử dụng đơn lẻ hoặc kết hợp với bộ b&agrave;n ăn để tạo ra bộ b&agrave;n ghế ăn ho&agrave;n chỉnh.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ghế Ăn Nệm Nhập Khẩu Sang Trọng, m&atilde; sản phẩm 2121, l&agrave; một sự lựa chọn tốt cho những người muốn kết hợp giữa sự thoải m&aacute;i v&agrave; phong c&aacute;ch trong kh&ocirc;ng gian ăn của m&igrave;nh.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '30.jpg',
            'price'=>'1400000',
            'product_type_id'=>7,
            'status' => 1
        ]);
        //tủ và kệ
        DB::table('products')->insert([
            'name' => 'Tủ Tài Liệu, Hồ Sơ Văn Phòng Màu 426',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Tủ T&agrave;i Liệu, Hồ Sơ Văn Ph&ograve;ng M&agrave;u 426 l&agrave; một phần của trang thiết bị văn ph&ograve;ng hữu &iacute;ch để tổ chức v&agrave; lưu trữ t&agrave;i liệu v&agrave; hồ sơ. Dưới đ&acirc;y l&agrave; một m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Đặc điểm chung:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu:</strong> Thường được l&agrave;m từ gỗ hoặc vật liệu nhựa chất lượng cao, cung cấp sự chắc chắn v&agrave; độ bền cho tủ.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>M&agrave;u sắc:</strong> M&agrave;u 426 c&oacute; thể l&agrave; một m&agrave;u sắc đặc trưng hoặc m&atilde; m&agrave;u cụ thể của nh&agrave; sản xuất hoặc nh&agrave; cung cấp. Điều n&agrave;y c&oacute; thể thay đổi t&ugrave;y thuộc v&agrave;o sở th&iacute;ch v&agrave; nhu cầu của kh&aacute;ch h&agrave;ng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>T&iacute;nh năng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Ngăn chia:</strong> Tủ thường được thiết kế với c&aacute;c ngăn chia hoặc kệ đựng để tổ chức v&agrave; ph&acirc;n loại t&agrave;i liệu theo chủ đề, dự &aacute;n hoặc bộ phận.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Kho&aacute; an to&agrave;n:</strong> Một số mẫu tủ c&oacute; thể đi k&egrave;m với kh&oacute;a hoặc c&oacute; thể được trang bị để đảm bảo an to&agrave;n cho t&agrave;i liệu v&agrave; th&ocirc;ng tin quan trọng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Đa dạng k&iacute;ch thước:</strong> C&oacute; thể c&oacute; nhiều k&iacute;ch thước kh&aacute;c nhau để ph&ugrave; hợp với kh&ocirc;ng gian v&agrave; nhu cầu lưu trữ cụ thể của từng văn ph&ograve;ng hoặc người d&ugrave;ng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Kiểu d&aacute;ng:</strong> Tủ c&oacute; thể c&oacute; kiểu d&aacute;ng đơn giản v&agrave; thanh lịch hoặc c&oacute; thể c&oacute; c&aacute;c chi tiết trang tr&iacute; để tạo điểm nhấn cho kh&ocirc;ng gian văn ph&ograve;ng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Mặt tủ:</strong> Mặt tủ thường được thiết kế phẳng để dễ d&agrave;ng gắn nh&atilde;n v&agrave; ph&acirc;n loại t&agrave;i liệu.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ph&ugrave; hợp cho văn ph&ograve;ng c&ocirc;ng ty, cơ quan, hoặc kh&ocirc;ng gian l&agrave;m việc c&aacute; nh&acirc;n để tổ chức v&agrave; lưu trữ t&agrave;i liệu v&agrave; hồ sơ.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&oacute; thể được sử dụng trong c&aacute;c ph&ograve;ng họp hoặc kh&ocirc;ng gian l&agrave;m việc chung để tổ chức v&agrave; lưu trữ t&agrave;i liệu dự &aacute;n v&agrave; hồ sơ quan trọng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Tủ T&agrave;i Liệu, Hồ Sơ Văn Ph&ograve;ng M&agrave;u 426 l&agrave; một phần quan trọng của trang thiết bị văn ph&ograve;ng để gi&uacute;p tổ chức v&agrave; lưu trữ t&agrave;i liệu v&agrave; hồ sơ một c&aacute;ch hiệu quả v&agrave; tiện lợi.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '31.jpg',
            'price'=>'3100000',
            'product_type_id'=>8,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Hộc Tủ Ngăn Kéo Và Cánh Bánh Xe',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Hộc Tủ Ngăn K&eacute;o V&agrave; C&aacute;nh B&aacute;nh Xe l&agrave; một phụ kiện tiện &iacute;ch trong kh&ocirc;ng gian văn ph&ograve;ng hoặc nơi l&agrave;m việc c&aacute; nh&acirc;n, gi&uacute;p tổ chức v&agrave; lưu trữ c&aacute;c vật dụng v&agrave; t&agrave;i liệu một c&aacute;ch gọn g&agrave;ng v&agrave; dễ d&agrave;ng di chuyển. Dưới đ&acirc;y l&agrave; một m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Đặc điểm chung:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu:</strong> Thường được l&agrave;m từ th&eacute;p hoặc nhựa chất lượng cao, cung cấp sự chắc chắn v&agrave; độ bền.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>C&aacute;nh b&aacute;nh xe:</strong> Được trang bị b&aacute;nh xe ở đ&aacute;y để dễ d&agrave;ng di chuyển v&agrave; di động tr&ecirc;n mặt s&agrave;n, gi&uacute;p linh hoạt trong việc sắp xếp kh&ocirc;ng gian l&agrave;m việc.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>T&iacute;nh năng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Ngăn k&eacute;o:</strong> Hộc c&oacute; thể được trang bị với ngăn k&eacute;o để tổ chức v&agrave; lưu trữ c&aacute;c vật dụng như t&agrave;i liệu, b&uacute;t, giấy tờ, hoặc đồ d&ugrave;ng c&aacute; nh&acirc;n.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>C&aacute;nh cửa:</strong> Một số mẫu hộc c&oacute; thể đi k&egrave;m với c&aacute;nh cửa để bảo vệ v&agrave; che giấu c&aacute;c vật dụng b&ecirc;n trong.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Kiểu d&aacute;ng:</strong> C&oacute; thể c&oacute; nhiều kiểu d&aacute;ng kh&aacute;c nhau, từ kiểu đơn giản v&agrave; thanh lịch đến kiểu hiện đại v&agrave; s&aacute;ng tạo.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>K&iacute;ch thước:</strong> C&oacute; c&aacute;c k&iacute;ch thước kh&aacute;c nhau để ph&ugrave; hợp với kh&ocirc;ng gian v&agrave; nhu cầu sử dụng cụ thể của từng người d&ugrave;ng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ph&ugrave; hợp cho kh&ocirc;ng gian l&agrave;m việc c&aacute; nh&acirc;n, b&agrave;n l&agrave;m việc, hoặc khu vực l&agrave;m việc chung trong văn ph&ograve;ng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&oacute; thể được sử dụng để tổ chức v&agrave; lưu trữ t&agrave;i liệu, đồ d&ugrave;ng văn ph&ograve;ng, hoặc đồ d&ugrave;ng c&aacute; nh&acirc;n một c&aacute;ch tiện lợi v&agrave; dễ d&agrave;ng di chuyển.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Hộc Tủ Ngăn K&eacute;o V&agrave; C&aacute;nh B&aacute;nh Xe l&agrave; một phụ kiện hữu &iacute;ch trong kh&ocirc;ng gian l&agrave;m việc, gi&uacute;p tối ưu h&oacute;a sự tiện lợi v&agrave; tổ chức trong việc lưu trữ v&agrave; sắp xếp c&aacute;c vật dụng v&agrave; t&agrave;i liệu.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '32.jpg',
            'price'=>'720000',
            'product_type_id'=>8,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Tủ Bếp Gỗ Sồi Nga 01',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Tủ Bếp Gỗ Sồi Nga 01 l&agrave; một phần quan trọng trong kh&ocirc;ng gian bếp, mang lại kh&ocirc;ng chỉ t&iacute;nh thẩm mỹ m&agrave; c&ograve;n t&iacute;nh tiện &iacute;ch v&agrave; độ bền cao. Dưới đ&acirc;y l&agrave; một m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Gỗ Sồi Nga:</strong> Sồi Nga l&agrave; loại gỗ cứng v&agrave; bền bỉ, th&iacute;ch hợp cho việc l&agrave;m đồ nội thất bền vững v&agrave; sang trọng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>T&iacute;nh năng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Lưu trữ:</strong> Tủ bếp n&agrave;y cung cấp kh&ocirc;ng gian lưu trữ đa dạng cho đồ d&ugrave;ng nh&agrave; bếp, từ ch&eacute;n đĩa đến đồ d&ugrave;ng nấu nướng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Bề mặt l&agrave;m việc:</strong> Mặt b&agrave;n l&agrave;m việc rộng r&atilde;i v&agrave; bền bỉ, cho ph&eacute;p bạn chuẩn bị thực phẩm một c&aacute;ch dễ d&agrave;ng v&agrave; tiện lợi.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>C&aacute;nh cửa:</strong> C&oacute; thể c&oacute; c&aacute;nh cửa mở hoặc cửa k&eacute;o, tạo sự linh hoạt trong việc truy cập v&agrave; sắp xếp đồ d&ugrave;ng b&ecirc;n trong.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Kiểu d&aacute;ng:</strong> Thiết kế đơn giản v&agrave; hiện đại, phản &aacute;nh sự tinh tế v&agrave; sang trọng của kh&ocirc;ng gian bếp.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>M&agrave;u sắc:</strong> Sản phẩm thường c&oacute; m&agrave;u gỗ tự nhi&ecirc;n của gỗ sồi, tạo n&ecirc;n vẻ đẹp ấm &aacute;p v&agrave; tự nhi&ecirc;n cho kh&ocirc;ng gian bếp.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ph&ugrave; hợp cho c&aacute;c kh&ocirc;ng gian bếp nh&agrave; ở, căn hộ, hoặc biệt thự.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">L&agrave; phần kh&ocirc;ng thể thiếu trong việc tổ chức v&agrave; tạo ra một kh&ocirc;ng gian bếp tiện nghi v&agrave; gọn g&agrave;ng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Tủ Bếp Gỗ Sồi Nga 01 kh&ocirc;ng chỉ l&agrave; một phần của nội thất bếp m&agrave; c&ograve;n l&agrave; điểm nhấn trong kh&ocirc;ng gian sống của bạn, tạo n&ecirc;n sự ấm &aacute;p v&agrave; sang trọng.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '33.jpg',
            'price'=>'4200000',
            'product_type_id'=>8,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Kệ Trang Trí KTT03',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Kệ Trang Tr&iacute; KTT03 l&agrave; một sản phẩm trang tr&iacute; nội thất đa năng, thường được sử dụng để trưng b&agrave;y c&aacute;c vật dụng trang tr&iacute;, s&aacute;ch, hoa v&agrave; c&aacute;c đồ vật kh&aacute;c để tạo điểm nhấn trong kh&ocirc;ng gian sống. Dưới đ&acirc;y l&agrave; một m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Gỗ:</strong> Thường l&agrave; gỗ tự nhi&ecirc;n như gỗ sồi, gỗ th&ocirc;ng, hoặc gỗ MDF, cung cấp sự bền bỉ v&agrave; đa dạng về m&agrave;u sắc v&agrave; hoa văn.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>T&iacute;nh năng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Kệ đa tầng:</strong> Kệ thường c&oacute; nhiều tầng hoặc kệ đa tầng, cung cấp kh&ocirc;ng gian lưu trữ v&agrave; trưng b&agrave;y đa dạng cho c&aacute;c vật phẩm trang tr&iacute;.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Trang tr&iacute;:</strong> Sản phẩm thường được sử dụng để trưng b&agrave;y c&aacute;c đồ vật trang tr&iacute; như h&igrave;nh ảnh, bức tranh, hoa, s&aacute;ch, đồ chơi, v&agrave; c&aacute;c vật dụng kh&aacute;c.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Kiểu d&aacute;ng:</strong> C&oacute; thể c&oacute; nhiều kiểu d&aacute;ng kh&aacute;c nhau, từ kiểu cổ điển đến kiểu hiện đại, ph&ugrave; hợp với nhiều phong c&aacute;ch trang tr&iacute;.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Kiểu d&aacute;ng:</strong> Thiết kế đa dạng v&agrave; phong ph&uacute;, c&oacute; thể l&agrave; kệ đứng đơn giản, kệ g&oacute;c, hoặc kệ treo tường.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>M&agrave;u sắc:</strong> Thường c&oacute; sẵn trong c&aacute;c m&agrave;u sắc tự nhi&ecirc;n của gỗ hoặc được sơn hoặc phủ lớp laminate để tạo n&ecirc;n sự đa dạng trong phong c&aacute;ch trang tr&iacute;.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ph&ugrave; hợp cho ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ, ph&ograve;ng l&agrave;m việc, hoặc bất kỳ kh&ocirc;ng gian n&agrave;o bạn muốn trang tr&iacute;.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Cung cấp kh&ocirc;ng gian lưu trữ v&agrave; trưng b&agrave;y cho c&aacute;c vật phẩm trang tr&iacute; y&ecirc;u th&iacute;ch của bạn.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Kệ Trang Tr&iacute; KTT03 l&agrave; một sản phẩm trang tr&iacute; đa năng, gi&uacute;p tạo n&ecirc;n điểm nhấn v&agrave; sự ấn tượng trong kh&ocirc;ng gian sống của bạn.Top of Form</span></span></p>
            ',
            'img'=> '34.jpg',
            'price'=>'2720000',
            'product_type_id'=>8,
            'status' => 1
        ]);
        //Đèn
        DB::table('products')->insert([
            'name' => 'Đèn cổ điển, khung gỗ, mặt mika nghệ thuật OCD-047',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&egrave;n cổ điển c&oacute; khung gỗ v&agrave; mặt mika nghệ thuật, m&atilde; sản phẩm OCD-047, l&agrave; một sản phẩm đ&egrave;n độc đ&aacute;o v&agrave; sang trọng, kết hợp giữa phong c&aacute;ch cổ điển v&agrave; hiện đại. Dưới đ&acirc;y l&agrave; một m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Khung gỗ:</strong> Sử dụng gỗ tự nhi&ecirc;n, gỗ sồi hoặc gỗ th&ocirc;ng thường được sử dụng để tạo khung cho đ&egrave;n, tạo ra vẻ đẹp tự nhi&ecirc;n v&agrave; sang trọng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Mặt mika nghệ thuật:</strong> Mika nghệ thuật l&agrave; một loại vật liệu nhẹ v&agrave; trong suốt, thường được sử dụng để tạo c&aacute;c hiệu ứng &aacute;nh s&aacute;ng độc đ&aacute;o v&agrave; tạo điểm nhấn nghệ thuật cho đ&egrave;n.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>T&iacute;nh năng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>&Aacute;nh s&aacute;ng:</strong> Cung cấp &aacute;nh s&aacute;ng ấm v&agrave; dịu d&agrave;ng, tạo ra một kh&ocirc;ng gian ấm &aacute;p v&agrave; thoải m&aacute;i.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Phong c&aacute;ch:</strong> Kết hợp giữa phong c&aacute;ch cổ điển với c&aacute;c chi tiết đặc trưng v&agrave; mặt mika nghệ thuật mang t&iacute;nh hiện đại, tạo ra một sản phẩm độc đ&aacute;o v&agrave; ấn tượng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Kiểu d&aacute;ng:</strong> C&oacute; thể c&oacute; nhiều kiểu d&aacute;ng kh&aacute;c nhau, từ đ&egrave;n b&agrave;n, đ&egrave;n treo trần đến đ&egrave;n đứng, ph&ugrave; hợp với nhiều kh&ocirc;ng gian v&agrave; phong c&aacute;ch trang tr&iacute;.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>M&agrave;u sắc:</strong> Thường c&oacute; sẵn trong c&aacute;c m&agrave;u sắc tự nhi&ecirc;n của gỗ hoặc được sơn để ph&ugrave; hợp với kh&ocirc;ng gian trang tr&iacute;.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ph&ugrave; hợp cho ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ, ph&ograve;ng l&agrave;m việc, hoặc kh&ocirc;ng gian trang tr&iacute; kh&aacute;c.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Tạo điểm nhấn nghệ thuật v&agrave; tăng t&iacute;nh thẩm mỹ cho kh&ocirc;ng gian sống của bạn.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&egrave;n cổ điển với khung gỗ v&agrave; mặt mika nghệ thuật, m&atilde; sản phẩm OCD-047, l&agrave; một lựa chọn tuyệt vời để l&agrave;m mới kh&ocirc;ng gian sống của bạn với sự kết hợp tinh tế giữa phong c&aacute;ch cổ điển v&agrave; hiện đại.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '35.jpg',
            'price'=>'2000000',
            'product_type_id'=>9,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Đèn tường Led hiện đại ngoài trời kiểu trụ VNT-365',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&egrave;n tường LED hiện đại ngo&agrave;i trời kiểu trụ VNT-365 l&agrave; một lựa chọn tuyệt vời để trang tr&iacute; v&agrave; chiếu s&aacute;ng cho kh&ocirc;ng gian ngoại thất của bạn. Dưới đ&acirc;y l&agrave; một m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Đặc điểm chung:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Loại đ&egrave;n:</strong> Đ&egrave;n tường LED, sử dụng c&ocirc;ng nghệ LED ti&ecirc;n tiến cho hiệu suất cao v&agrave; tiết kiệm năng lượng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Kiểu d&aacute;ng:</strong> Kiểu trụ, thường c&oacute; thiết kế hiện đại v&agrave; sang trọng, ph&ugrave; hợp với nhiều phong c&aacute;ch kiến tr&uacute;c ngoại thất.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Vật liệu:</strong> Thường l&agrave; hợp kim nh&ocirc;m hoặc th&eacute;p kh&ocirc;ng gỉ, chịu được điều kiện thời tiết khắc nghiệt v&agrave; c&oacute; độ bền cao.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>K&iacute;nh:</strong> C&oacute; thể sử dụng k&iacute;nh cường lực hoặc k&iacute;nh đặc biệt chịu được t&aacute;c động từ m&ocirc;i trường b&ecirc;n ngo&agrave;i.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>T&iacute;nh năng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>&Aacute;nh s&aacute;ng:</strong> Đ&egrave;n thường c&oacute; &aacute;nh s&aacute;ng mạnh v&agrave; đồng đều, tạo ra một kh&ocirc;ng gian ngoại thất s&aacute;ng v&agrave; an to&agrave;n v&agrave;o buổi tối.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Tiết kiệm năng lượng:</strong> Sử dụng c&ocirc;ng nghệ LED tiết kiệm năng lượng, gi&uacute;p giảm chi ph&iacute; vận h&agrave;nh v&agrave; bảo tr&igrave;.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chống thấm nước:</strong> Thường được thiết kế chống thấm nước, ph&ugrave; hợp để sử dụng ngo&agrave;i trời trong mọi điều kiện thời tiết.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Kiểu d&aacute;ng:</strong> C&oacute; thể c&oacute; nhiều kiểu d&aacute;ng kh&aacute;c nhau như trụ đứng, h&igrave;nh tr&ograve;n, h&igrave;nh vu&ocirc;ng, tạo điểm nhấn v&agrave; phong c&aacute;ch cho kh&ocirc;ng gian ngoại thất.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>M&agrave;u sắc:</strong> Thường c&oacute; sẵn trong c&aacute;c m&agrave;u sắc hiện đại như đen, trắng, hoặc x&aacute;m, tạo sự phối hợp với kh&ocirc;ng gian xung quanh.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ph&ugrave; hợp cho việc chiếu s&aacute;ng đường h&agrave;nh lang, lối đi, s&acirc;n vườn, hoặc c&aacute;c khu vực ngo&agrave;i trời kh&aacute;c.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Tạo điểm nhấn trang tr&iacute; v&agrave; tăng t&iacute;nh thẩm mỹ cho kh&ocirc;ng gian ngoại thất của ng&ocirc;i nh&agrave; hoặc khu&ocirc;n vi&ecirc;n.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&egrave;n tường LED hiện đại ngo&agrave;i trời kiểu trụ VNT-365 l&agrave; một sự lựa chọn l&yacute; tưởng để chiếu s&aacute;ng v&agrave; trang tr&iacute; cho kh&ocirc;ng gian ngoại thất của bạn, với sự kết hợp ho&agrave;n hảo giữa t&iacute;nh năng v&agrave; thẩm mỹ.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '36.jpg',
            'price'=>'400000',
            'product_type_id'=>9,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Đèn chùm phòng khách-bàn ăn, chao vải, phong cách vintage DC-2020',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&egrave;n ch&ugrave;m ph&ograve;ng kh&aacute;ch-b&agrave;n ăn, chao vải, phong c&aacute;ch vintage m&atilde; DC-2020 l&agrave; một lựa chọn tuyệt vời để tạo điểm nhấn v&agrave; tạo kh&ocirc;ng gian ấm &aacute;p v&agrave; sang trọng cho ph&ograve;ng kh&aacute;ch hoặc khu vực b&agrave;n ăn. Dưới đ&acirc;y l&agrave; một m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Đặc điểm chung:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Loại đ&egrave;n:</strong> Đ&egrave;n ch&ugrave;m, thường được sử dụng để chiếu s&aacute;ng ph&ograve;ng kh&aacute;ch hoặc khu vực b&agrave;n ăn.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chao vải:</strong> Chao đ&egrave;n được l&agrave;m từ vải, tạo n&ecirc;n &aacute;nh s&aacute;ng mềm mại v&agrave; dịu d&agrave;ng, tạo kh&ocirc;ng gian ấm &aacute;p v&agrave; thoải m&aacute;i.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Khung:</strong> Thường l&agrave; kim loại như đồng, sắt hoặc th&eacute;p, tạo n&ecirc;n sự chắc chắn v&agrave; độ bền cho đ&egrave;n.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chao vải:</strong> Sử dụng vải cao cấp để tạo ra chao đ&egrave;n mềm mại v&agrave; tinh tế.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>T&iacute;nh năng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>&Aacute;nh s&aacute;ng:</strong> Tạo ra &aacute;nh s&aacute;ng ấm v&agrave; dịu d&agrave;ng, tạo kh&ocirc;ng gian thoải m&aacute;i v&agrave; l&atilde;ng mạn cho ph&ograve;ng kh&aacute;ch hoặc khu vực b&agrave;n ăn.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Phong c&aacute;ch:</strong> Phong c&aacute;ch vintage mang đến vẻ đẹp cổ điển v&agrave; độc đ&aacute;o, l&agrave; điểm nhấn nghệ thuật cho kh&ocirc;ng gian trang tr&iacute; của bạn.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Kiểu d&aacute;ng:</strong> Đ&egrave;n ch&ugrave;m thường c&oacute; kiểu d&aacute;ng đa dạng, từ kiểu đơn giản đến kiểu phức tạp, tạo n&ecirc;n sự lựa chọn ph&ugrave; hợp với phong c&aacute;ch trang tr&iacute; của bạn.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>M&agrave;u sắc:</strong> Thường c&oacute; sẵn trong c&aacute;c m&agrave;u sắc vintage như đồng cổ, đen hoặc xanh cổ điển, tạo n&ecirc;n sự ho&agrave;n hảo cho kh&ocirc;ng gian trang tr&iacute; vintage.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ph&ugrave; hợp cho ph&ograve;ng kh&aacute;ch, ph&ograve;ng bếp, hoặc khu vực b&agrave;n ăn trong nh&agrave;.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Tạo điểm nhấn trang tr&iacute; v&agrave; tạo ra kh&ocirc;ng gian ấm &aacute;p v&agrave; sang trọng trong kh&ocirc;ng gian sống của bạn.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&egrave;n ch&ugrave;m ph&ograve;ng kh&aacute;ch-b&agrave;n ăn, chao vải, phong c&aacute;ch vintage m&atilde; DC-2020 l&agrave; một sự lựa chọn l&yacute; tưởng để tạo ra kh&ocirc;ng gian sống đẳng cấp v&agrave; ấm &aacute;p, mang lại vẻ đẹp v&agrave; phong c&aacute;ch cho kh&ocirc;ng gian trang tr&iacute; của bạn.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '37.jpg',
            'price'=>'4000000',
            'product_type_id'=>9,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Đèn thả Decor – Thiết kế hiện đại thủy tinh hình lông vũ TDC-2281',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <br />
            <br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&egrave;n thả Decor m&atilde; TDC-2281 l&agrave; một sản phẩm với thiết kế hiện đại, sử dụng chất liệu thủy tinh v&agrave; h&igrave;nh dạng l&ocirc;ng vũ, tạo điểm nhấn v&agrave; phong c&aacute;ch cho kh&ocirc;ng gian trang tr&iacute; của bạn. Dưới đ&acirc;y l&agrave; một m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Đặc điểm chung:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Loại đ&egrave;n:</strong> Đ&egrave;n thả, thường được sử dụng để l&agrave;m điểm nhấn trang tr&iacute; cho ph&ograve;ng kh&aacute;ch, ph&ograve;ng ăn hoặc khu vực l&agrave;m việc.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế:</strong> Thiết kế hiện đại v&agrave; sang trọng, với h&igrave;nh dạng l&ocirc;ng vũ thủy tinh độc đ&aacute;o, tạo n&ecirc;n một sự kết hợp tinh tế giữa nghệ thuật v&agrave; c&ocirc;ng nghệ.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thủy tinh:</strong> Sử dụng thủy tinh cao cấp, tạo ra vẻ đẹp trong suốt v&agrave; &aacute;nh s&aacute;ng lấp l&aacute;nh khi chiếu s&aacute;ng qua.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Khung:</strong> Thường l&agrave; kim loại như đồng hoặc th&eacute;p kh&ocirc;ng gỉ, mang lại sự chắc chắn v&agrave; độ bền cho đ&egrave;n.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>T&iacute;nh năng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>&Aacute;nh s&aacute;ng:</strong> Tạo ra &aacute;nh s&aacute;ng mềm mại v&agrave; l&atilde;ng mạn, tạo kh&ocirc;ng gian ấm &aacute;p v&agrave; thoải m&aacute;i cho ph&ograve;ng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Trang tr&iacute;:</strong> Đ&egrave;n thả Decor thường được sử dụng để tạo điểm nhấn trang tr&iacute; v&agrave; tạo ra một kh&ocirc;ng gian sống độc đ&aacute;o v&agrave; ấn tượng.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Kiểu d&aacute;ng:</strong> Thiết kế h&igrave;nh l&ocirc;ng vũ thủy tinh độc đ&aacute;o, tạo ra một sự kh&aacute;c biệt v&agrave; nổi bật cho kh&ocirc;ng gian trang tr&iacute;.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>M&agrave;u sắc:</strong> Thường c&oacute; sẵn trong c&aacute;c t&ocirc;ng m&agrave;u như trắng, đen hoặc trong suốt, tạo sự linh hoạt cho việc phối m&agrave;u với kh&ocirc;ng gian trang tr&iacute;.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Ứng dụng:</strong></span></span></p>

            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ph&ugrave; hợp cho ph&ograve;ng kh&aacute;ch, ph&ograve;ng ăn, ph&ograve;ng ngủ hoặc kh&ocirc;ng gian l&agrave;m việc.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Tạo điểm nhấn trang tr&iacute; v&agrave; mang lại kh&ocirc;ng gian sống độc đ&aacute;o v&agrave; sang trọng cho kh&ocirc;ng gian của bạn.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&egrave;n thả Decor m&atilde; TDC-2281 l&agrave; một sự lựa chọn tuyệt vời để tạo ra kh&ocirc;ng gian sống độc đ&aacute;o v&agrave; sang trọng, với thiết kế hiện đại v&agrave; sự kết hợp tinh tế giữa thủy tinh v&agrave; h&igrave;nh dạng l&ocirc;ng vũ.Top of Form</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '38.jpg',
            'price'=>'500000',
            'product_type_id'=>9,
            'status' => 1
        ]);
        //trang trí
        DB::table('products')->insert([
            'name' => 'Tranh Phù Điêu 3D Cao Cấp M02',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Tranh Ph&ugrave; Đi&ecirc;u 3D Cao Cấp M02 l&agrave; một t&aacute;c phẩm nghệ thuật tinh tế kết hợp giữa c&ocirc;ng nghệ hiện đại v&agrave; nghệ thuật truyền thống. Dưới đ&acirc;y l&agrave; một m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu</strong>: Tranh được l&agrave;m từ chất liệu cao cấp như gỗ, nhựa tổng hợp hoặc sợi thủy tinh, mang lại độ bền v&agrave; t&iacute;nh thẩm mỹ cao.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>K&iacute;ch thước</strong>: C&oacute; thể c&oacute; nhiều k&iacute;ch thước kh&aacute;c nhau để ph&ugrave; hợp với kh&ocirc;ng gian sử dụng, từ nhỏ đến lớn.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>C&ocirc;ng nghệ 3D</strong>: Sản phẩm sử dụng c&ocirc;ng nghệ in 3D ti&ecirc;n tiến để tạo ra hiệu ứng chiều s&acirc;u v&agrave; sự sống động cho h&igrave;nh ảnh. Điều n&agrave;y tạo ra một trải nghiệm hấp dẫn v&agrave; sống động khi người nh&igrave;n chi&ecirc;m ngưỡng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chủ đề Ph&ugrave; Đi&ecirc;u</strong>: Tranh mang trong m&igrave;nh h&igrave;nh ảnh của c&aacute;c ph&ugrave; đi&ecirc;u, được thực hiện với độ chi tiết cao v&agrave; sự tinh tế trong từng đường n&eacute;t. Điều n&agrave;y t&ocirc;n vinh văn h&oacute;a v&agrave; nghệ thuật truyền thống của một nền văn minh.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>M&agrave;u sắc v&agrave; ho&agrave;n thiện</strong>: Sản phẩm c&oacute; thể được ho&agrave;n thiện với c&aacute;c m&agrave;u sắc tự nhi&ecirc;n hoặc sơn phủ, tạo ra một vẻ đẹp ho&agrave;n hảo v&agrave; bền bỉ theo thời gian.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Sử dụng trong nhiều kh&ocirc;ng gian</strong>: Tranh c&oacute; thể được treo tr&ecirc;n tường trong ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ, ph&ograve;ng l&agrave;m việc, hoặc thậm ch&iacute; trong c&aacute;c kh&ocirc;ng gian ngo&agrave;i trời như s&acirc;n vườn hoặc ban c&ocirc;ng, tạo điểm nhấn nghệ thuật cho m&ocirc;i trường.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Phong c&aacute;ch hiện đại v&agrave; truyền thống</strong>: Sản phẩm kết hợp giữa phong c&aacute;ch hiện đại v&agrave; truyền thống, phản &aacute;nh sự kết hợp h&agrave;i h&ograve;a giữa qu&aacute; khứ v&agrave; hiện đại trong nghệ thuật.</span></span></li>
            </ol>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Tranh Ph&ugrave; Đi&ecirc;u 3D Cao Cấp M02 kh&ocirc;ng chỉ l&agrave; một m&oacute;n đồ trang tr&iacute; mỹ thuật m&agrave; c&ograve;n l&agrave; một biểu tượng của sự sang trọng, tinh tế v&agrave; t&ocirc;n vinh nghệ thuật truyền thống.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '39.jpg',
            'price'=>'2500000',
            'product_type_id'=>10,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Tranh treo tường mã đáo thành công M1',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <br />
            <br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Tranh treo tường &quot;M&atilde; Đ&aacute;o Th&agrave;nh C&ocirc;ng M1&quot; l&agrave; một t&aacute;c phẩm nghệ thuật độc đ&aacute;o v&agrave; &yacute; nghĩa, thường được lựa chọn để trang tr&iacute; kh&ocirc;ng gian sống hoặc l&agrave;m việc. Dưới đ&acirc;y l&agrave; một m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu</strong>: Tranh được l&agrave;m từ chất liệu cao cấp như vải canvas, gỗ, hoặc nhựa tổng hợp, mang lại độ bền v&agrave; t&iacute;nh thẩm mỹ cao.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>K&iacute;ch thước</strong>: C&oacute; thể c&oacute; nhiều k&iacute;ch thước kh&aacute;c nhau để ph&ugrave; hợp với kh&ocirc;ng gian sử dụng, từ nhỏ đến lớn, tuỳ thuộc v&agrave;o sở th&iacute;ch v&agrave; y&ecirc;u cầu của kh&aacute;ch h&agrave;ng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>M&atilde; Đ&aacute;o Th&agrave;nh C&ocirc;ng</strong>: Tranh mang trong m&igrave;nh h&igrave;nh ảnh của &quot;M&atilde; Đ&aacute;o Th&agrave;nh C&ocirc;ng&quot;, một biểu tượng của sự th&agrave;nh c&ocirc;ng, may mắn v&agrave; ph&uacute; qu&yacute; trong văn h&oacute;a truyền thống của người &Aacute; Đ&ocirc;ng. H&igrave;nh ảnh n&agrave;y thường được minh họa bằng h&igrave;nh tượng một con ngựa đang nhảy qua một bức tường, tượng trưng cho sự vượt qua kh&oacute; khăn v&agrave; chiến thắng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>M&agrave;u sắc v&agrave; ho&agrave;n thiện</strong>: Sản phẩm c&oacute; thể được ho&agrave;n thiện với c&aacute;c m&agrave;u sắc sống động v&agrave; sắc n&eacute;t, tạo ra một vẻ đẹp ho&agrave;n hảo v&agrave; bền bỉ theo thời gian. C&aacute;c chi tiết được l&agrave;m tỉ mỉ v&agrave; ch&iacute;nh x&aacute;c để tạo ra một h&igrave;nh ảnh sống động v&agrave; thu h&uacute;t người xem.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Phong c&aacute;ch trang tr&iacute;</strong>: Tranh treo tường &quot;M&atilde; Đ&aacute;o Th&agrave;nh C&ocirc;ng M1&quot; thường được sử dụng để trang tr&iacute; trong ph&ograve;ng kh&aacute;ch, ph&ograve;ng l&agrave;m việc hoặc kh&ocirc;ng gian l&agrave;m việc, tạo điểm nhấn nghệ thuật v&agrave; tinh thần cho m&ocirc;i trường.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>&Yacute; nghĩa</strong>: H&igrave;nh ảnh của &quot;M&atilde; Đ&aacute;o Th&agrave;nh C&ocirc;ng&quot; mang theo &yacute; nghĩa về sự th&agrave;nh c&ocirc;ng, may mắn v&agrave; ph&uacute; qu&yacute;, l&agrave;m cho sản phẩm trở th&agrave;nh một biểu tượng của sự may mắn v&agrave; th&agrave;nh c&ocirc;ng trong cuộc sống v&agrave; sự nghiệp.</span></span></li>
            </ol>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Tranh treo tường &quot;M&atilde; Đ&aacute;o Th&agrave;nh C&ocirc;ng M1&quot; kh&ocirc;ng chỉ l&agrave; một m&oacute;n đồ trang tr&iacute; mỹ thuật m&agrave; c&ograve;n l&agrave; một biểu tượng của sự th&agrave;nh c&ocirc;ng v&agrave; may mắn, tạo điểm nhấn độc đ&aacute;o v&agrave; &yacute; nghĩa cho kh&ocirc;ng gian sống hoặc l&agrave;m việc của bạn.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '40.jpg',
            'price'=>'1500000',
            'product_type_id'=>10,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Gương Nghệ Thuật Trang Trí Stella Mirror Navado',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Gương Nghệ Thuật Trang Tr&iacute; Stella Mirror Navado l&agrave; một sản phẩm trang tr&iacute; nội thất độc đ&aacute;o v&agrave; sang trọng, mang đậm phong c&aacute;ch hiện đại v&agrave; sự tinh tế trong thiết kế. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế</strong>: Gương Stella Mirror Navado c&oacute; một thiết kế độc đ&aacute;o v&agrave; hiện đại, với c&aacute;c đường n&eacute;t mềm mại v&agrave; tỉ mỉ. Bề mặt của gương thường được chăm ch&uacute;t tỉ mỉ để tạo ra c&aacute;c hiệu ứng &aacute;nh s&aacute;ng độc đ&aacute;o khi &aacute;nh s&aacute;ng chiếu qua.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu</strong>: Gương thường được l&agrave;m từ chất liệu gương cao cấp, với lớp phủ chống trầy xước v&agrave; chống oxi h&oacute;a để bảo vệ bề mặt gương v&agrave; gia tăng độ bền của sản phẩm. Khung của gương c&oacute; thể được l&agrave;m từ c&aacute;c vật liệu như gỗ, kim loại hoặc nhựa, t&ugrave;y thuộc v&agrave;o phong c&aacute;ch thiết kế v&agrave; sở th&iacute;ch c&aacute; nh&acirc;n.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>K&iacute;ch thước</strong>: Gương c&oacute; thể c&oacute; nhiều k&iacute;ch thước kh&aacute;c nhau để ph&ugrave; hợp với kh&ocirc;ng gian trang tr&iacute; của bạn. T&ugrave;y thuộc v&agrave;o nhu cầu v&agrave; sở th&iacute;ch, c&oacute; thể chọn từ c&aacute;c phi&ecirc;n bản nhỏ nhắn cho đến c&aacute;c phi&ecirc;n bản lớn hơn để tạo điểm nhấn trang tr&iacute; mạnh mẽ.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>C&ocirc;ng dụng</strong>: Gương Nghệ Thuật Trang Tr&iacute; Stella Mirror Navado kh&ocirc;ng chỉ l&agrave; một vật dụng hữu &iacute;ch trong việc tự soi m&igrave;nh m&agrave; c&ograve;n l&agrave; một điểm nhấn trang tr&iacute; tinh tế cho kh&ocirc;ng gian sống. Sự phản chiếu của gương c&oacute; thể tạo ra hiệu ứng mở rộng kh&ocirc;ng gian v&agrave; tạo điểm nhấn cho bất kỳ ph&ograve;ng n&agrave;o.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Phong c&aacute;ch</strong>: Với thiết kế độc đ&aacute;o v&agrave; sang trọng, gương Stella Mirror Navado ph&ugrave; hợp với nhiều loại kh&ocirc;ng gian trang tr&iacute; kh&aacute;c nhau, từ ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ đến ph&ograve;ng l&agrave;m việc hoặc ph&ograve;ng tắm. Phong c&aacute;ch hiện đại của sản phẩm l&agrave;m cho n&oacute; trở th&agrave;nh một lựa chọn ho&agrave;n hảo cho c&aacute;c kh&ocirc;ng gian trang tr&iacute; hiện đại v&agrave; sang trọng.</span></span></li>
            </ol>

            <p>&nbsp;</p>
            ',
            'img'=> '41.jpg',
            'price'=>'1500000',
            'product_type_id'=>10,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Giá Rượu Vang Để Bàn (KR024) – Cá Chép May Mắn',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Rượu Vang Để B&agrave;n (KR024) &ndash; C&aacute; Ch&eacute;p May Mắn l&agrave; một sản phẩm mang t&iacute;nh trang tr&iacute; v&agrave; &yacute; nghĩa tinh thần đặc biệt. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế</strong>: Rượu vang được đựng trong một chai nhỏ, thường c&oacute; thiết kế độc đ&aacute;o với h&igrave;nh ảnh của c&aacute; ch&eacute;p may mắn được in hoặc khắc tr&ecirc;n bề mặt chai. C&aacute; ch&eacute;p l&agrave; biểu tượng của sự may mắn, sức khỏe v&agrave; th&agrave;nh c&ocirc;ng trong văn h&oacute;a &Aacute; Đ&ocirc;ng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất lượng rượu vang</strong>: Sản phẩm thường sử dụng rượu vang chất lượng cao, được chọn lựa kỹ c&agrave;ng từ c&aacute;c loại vang ngon nổi tiếng tr&ecirc;n thế giới. Rượu vang thường c&oacute; m&ugrave;i hương thơm phức v&agrave; hương vị đặc trưng, tạo n&ecirc;n trải nghiệm thưởng thức đầy ấn tượng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Phụ kiện đi k&egrave;m</strong>: Sản phẩm c&oacute; thể đi k&egrave;m với c&aacute;c phụ kiện trang tr&iacute; như d&acirc;y ruy băng, hộp đựng đẹp mắt, hoặc c&aacute;c phụ kiện trang tr&iacute; kh&aacute;c tạo điểm nhấn cho sản phẩm.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>&Yacute; nghĩa</strong>: Rượu vang với h&igrave;nh ảnh c&aacute; ch&eacute;p may mắn mang theo &yacute; nghĩa về sự may mắn, th&agrave;nh c&ocirc;ng v&agrave; thịnh vượng. Sản phẩm thường được sử dụng như một m&oacute;n qu&agrave; &yacute; nghĩa trong c&aacute;c dịp đặc biệt như Tết Nguy&ecirc;n Đ&aacute;n, kỷ niệm, hay để trang tr&iacute; kh&ocirc;ng gian sống v&agrave; l&agrave;m việc.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Gi&aacute; cả</strong>: Gi&aacute; của sản phẩm thường phụ thuộc v&agrave;o chất lượng của rượu vang, thiết kế chai v&agrave; c&aacute;c phụ kiện đi k&egrave;m. C&oacute; nhiều phi&ecirc;n bản v&agrave; mức gi&aacute; kh&aacute;c nhau để ph&ugrave; hợp với nhu cầu v&agrave; ng&acirc;n s&aacute;ch của kh&aacute;ch h&agrave;ng.</span></span></li>
            </ol>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Với sự kết hợp giữa hương vị ngon ngọt của rượu vang v&agrave; &yacute; nghĩa tinh thần của c&aacute; ch&eacute;p may mắn, sản phẩm Rượu Vang Để B&agrave;n (KR024) &ndash; C&aacute; Ch&eacute;p May Mắn l&agrave; một lựa chọn tuyệt vời để l&agrave;m qu&agrave; tặng hoặc trang tr&iacute; cho kh&ocirc;ng gian sống v&agrave; l&agrave;m việc.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '42.jpg',
            'price'=>'1500000',
            'product_type_id'=>10,
            'status' => 1
        ]);
        //VLTT
        DB::table('products')->insert([
            'name' => 'Rèm cuốn văn phòng giá rẻ hãng Winsun mã RCW016',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><br />
            <span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">R&egrave;m cuốn văn ph&ograve;ng m&atilde; RCW016 của h&atilde;ng Winsun l&agrave; một sản phẩm r&egrave;m cuốn đơn giản nhưng đ&aacute;ng tin cậy v&agrave; tiết kiệm chi ph&iacute;. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu</strong>: R&egrave;m cuốn được l&agrave;m từ vật liệu chất lượng cao, thường l&agrave; vải polyester bền v&agrave; dễ d&agrave;ng vệ sinh. Vải c&oacute; thể c&oacute; nhiều lựa chọn m&agrave;u sắc v&agrave; hoa văn kh&aacute;c nhau để ph&ugrave; hợp với phong c&aacute;ch trang tr&iacute; của văn ph&ograve;ng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế</strong>: R&egrave;m cuốn c&oacute; thiết kế đơn giản, gọn nhẹ v&agrave; dễ lắp đặt. D&acirc;y k&eacute;o được l&agrave;m từ chất liệu chắc chắn v&agrave; dễ d&agrave;ng điều chỉnh, gi&uacute;p bạn c&oacute; thể mở hoặc đ&oacute;ng r&egrave;m một c&aacute;ch thuận tiện.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chức năng</strong>: Sản phẩm cung cấp chức năng che nắng v&agrave; bảo vệ sự ri&ecirc;ng tư cho kh&ocirc;ng gian văn ph&ograve;ng một c&aacute;ch hiệu quả. R&egrave;m cuốn cũng gi&uacute;p kiểm so&aacute;t &aacute;nh s&aacute;ng v&agrave; nhiệt độ, tạo ra một m&ocirc;i trường l&agrave;m việc thoải m&aacute;i v&agrave; tiết kiệm năng lượng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>K&iacute;ch thước</strong>: R&egrave;m cuốn c&oacute; thể được l&agrave;m theo k&iacute;ch thước t&ugrave;y chỉnh để ph&ugrave; hợp với c&aacute;c cửa sổ hoặc cửa ra v&agrave;o trong văn ph&ograve;ng của bạn.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Gi&aacute; cả</strong>: R&egrave;m cuốn văn ph&ograve;ng m&atilde; RCW016 thường c&oacute; mức gi&aacute; phải chăng, ph&ugrave; hợp với ng&acirc;n s&aacute;ch của đa số kh&aacute;ch h&agrave;ng. Điều n&agrave;y l&agrave;m cho sản phẩm trở th&agrave;nh một lựa chọn hấp dẫn cho c&aacute;c doanh nghiệp, đặc biệt l&agrave; những nơi c&oacute; nhu cầu lắp đặt một lượng lớn r&egrave;m cuốn.</span></span></li>
            </ol>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Với sự đơn giản, tiết kiệm chi ph&iacute; v&agrave; t&iacute;nh tiện &iacute;ch, r&egrave;m cuốn văn ph&ograve;ng m&atilde; RCW016 của h&atilde;ng Winsun l&agrave; một lựa chọn ph&ugrave; hợp để trang tr&iacute; v&agrave; bảo vệ kh&ocirc;ng gian l&agrave;m việc của bạn.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '43.jpg',
            'price'=>'245000',
            'product_type_id'=>11,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Bộ chăn gối ESJ 24030 - TENCEL',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Bộ chăn gối ESJ 24030 l&agrave; một sản phẩm chất lượng cao của thương hiệu TENCEL, mang lại sự thoải m&aacute;i v&agrave; tiện &iacute;ch cho giấc ngủ của bạn. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu</strong>: Bộ chăn gối ESJ 24030 sử dụng chất liệu TENCEL, l&agrave; một loại sợi tổng hợp được sản xuất từ gỗ th&ocirc;ng v&agrave; c&acirc;y eucalyptus, với quy tr&igrave;nh sản xuất th&acirc;n thiện với m&ocirc;i trường. TENCEL c&oacute; khả năng hấp thụ ẩm tốt hơn so với cotton, gi&uacute;p duy tr&igrave; cảm gi&aacute;c kh&ocirc; tho&aacute;ng v&agrave; m&aacute;t mẻ cho giấc ngủ.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế</strong>: Bộ chăn gối thường bao gồm một chăn v&agrave; một hoặc nhiều gối, với c&aacute;c k&iacute;ch thước ph&ugrave; hợp với giường ngủ ti&ecirc;u chuẩn. Chăn v&agrave; gối c&oacute; thể c&oacute; thiết kế đơn giản hoặc được trang tr&iacute; với c&aacute;c họa tiết đẹp mắt, tạo điểm nhấn cho ph&ograve;ng ngủ của bạn.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Bảo quản v&agrave; vệ sinh</strong>: Chất liệu TENCEL dễ d&agrave;ng bảo quản v&agrave; vệ sinh, c&oacute; khả năng chống khuẩn v&agrave; kh&ocirc;ng g&acirc;y k&iacute;ch ứng cho da. Sản phẩm c&oacute; thể được giặt m&aacute;y v&agrave; l&agrave;m kh&ocirc; một c&aacute;ch thuận tiện, gi&uacute;p bạn duy tr&igrave; sự sạch sẽ v&agrave; sức khỏe cho bộ chăn gối trong thời gian d&agrave;i sử dụng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Tiện &iacute;ch</strong>: Bộ chăn gối ESJ 24030 kh&ocirc;ng chỉ l&agrave; một vật dụng trang tr&iacute; đẹp mắt cho ph&ograve;ng ngủ m&agrave; c&ograve;n mang lại sự thoải m&aacute;i v&agrave; &ecirc;m &aacute;i cho giấc ngủ của bạn. Chất liệu TENCEL cũng gi&uacute;p c&acirc;n bằng nhiệt độ v&agrave; h&uacute;t ẩm, tạo điều kiện l&yacute; tưởng cho một giấc ngủ s&acirc;u v&agrave; ngon.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Gi&aacute; cả</strong>: Gi&aacute; của bộ chăn gối ESJ 24030 c&oacute; thể dao động t&ugrave;y thuộc v&agrave;o k&iacute;ch thước, thiết kế v&agrave; chất liệu sử dụng. Tuy nhi&ecirc;n, thường th&igrave; sản phẩm của thương hiệu TENCEL đều c&oacute; mức gi&aacute; phải chăng, ph&ugrave; hợp với nhiều đối tượng kh&aacute;ch h&agrave;ng.</span></span></li>
            </ol>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Với sự kết hợp giữa chất lượng, tiện &iacute;ch v&agrave; gi&aacute; trị thẩm mỹ, bộ chăn gối ESJ 24030 của TENCEL l&agrave; một lựa chọn tuyệt vời để n&acirc;ng cao chất lượng giấc ngủ của bạn.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '44.jpg',
            'price'=>'4500000',
            'product_type_id'=>11,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Thảm phòng khách | LIND | polyester | xám | hoạ tiết vuông | R200xD300cm',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Thảm ph&ograve;ng kh&aacute;ch LIND l&agrave; một sản phẩm chất lượng của loại polyester, với m&agrave;u sắc x&aacute;m v&agrave; hoạ tiết vu&ocirc;ng, k&iacute;ch thước R200xD300cm. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu</strong>: Thảm được l&agrave;m từ chất liệu polyester, l&agrave; một loại vật liệu nhẹ, bền v&agrave; dễ vệ sinh. Polyester cũng c&oacute; khả năng chống thấm nước v&agrave; m&agrave;i m&ograve;n, l&agrave;m cho sản phẩm n&agrave;y ph&ugrave; hợp cho sử dụng ở ph&ograve;ng kh&aacute;ch, nơi c&oacute; lưu lượng người đi lại nhiều.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>M&agrave;u sắc</strong>: Thảm c&oacute; m&agrave;u sắc x&aacute;m, một lựa chọn phổ biến v&agrave; dễ d&agrave;ng phối hợp với nhiều phong c&aacute;ch trang tr&iacute; nội thất kh&aacute;c nhau. M&agrave;u x&aacute;m thường mang lại cảm gi&aacute;c trang nh&atilde;, hiện đại v&agrave; dễ d&agrave;ng kết hợp với c&aacute;c loại nội thất v&agrave; trang tr&iacute; kh&aacute;c.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Hoạ tiết</strong>: Thảm c&oacute; hoạ tiết vu&ocirc;ng, tạo điểm nhấn th&uacute; vị v&agrave; sự đa dạng cho kh&ocirc;ng gian ph&ograve;ng kh&aacute;ch. Hoạ tiết vu&ocirc;ng c&oacute; thể tạo ra một c&aacute;i nh&igrave;n h&agrave;i h&ograve;a v&agrave; trang tr&iacute; cho kh&ocirc;ng gian sống của bạn.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>K&iacute;ch thước</strong>: K&iacute;ch thước của thảm l&agrave; R200xD300cm, ph&ugrave; hợp với nhiều k&iacute;ch thước kh&ocirc;ng gian ph&ograve;ng kh&aacute;ch kh&aacute;c nhau. Với k&iacute;ch thước lớn n&agrave;y, thảm c&oacute; thể tạo ra một kh&ocirc;ng gian sang trọng v&agrave; thoải m&aacute;i cho gia đ&igrave;nh v&agrave; kh&aacute;ch mời.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Tiện &iacute;ch</strong>: Thảm ph&ograve;ng kh&aacute;ch LIND kh&ocirc;ng chỉ l&agrave; một vật trang tr&iacute; đẹp mắt m&agrave; c&ograve;n gi&uacute;p giảm tiếng ồn, c&aacute;ch nhiệt v&agrave; tạo cảm gi&aacute;c ấm &aacute;p cho kh&ocirc;ng gian sống. Chất liệu polyester dễ d&agrave;ng vệ sinh v&agrave; bảo quản, gi&uacute;p sản phẩm duy tr&igrave; vẻ đẹp v&agrave; sức khỏe trong thời gian d&agrave;i sử dụng.</span></span></li>
            </ol>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Với thiết kế hiện đại, chất liệu bền bỉ v&agrave; t&iacute;nh tiện &iacute;ch cao, thảm ph&ograve;ng kh&aacute;ch LIND sẽ l&agrave; một lựa chọn tuyệt vời để trang tr&iacute; v&agrave; tạo điểm nhấn cho kh&ocirc;ng gian ph&ograve;ng kh&aacute;ch của bạn.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '45.jpg',
            'price'=>'0',
            'product_type_id'=>11,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Thảm phòng khách | BIRK | polyester | màu tự nhiên | Ø200cm',
            'description'=> '<p style="text-align:center"><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-size:20.0pt"><span style="color:black">M&Ocirc; TẢ </span></span></u></strong><strong><u><span dir="ltr" lang="EN-US" style="font-size:20.0pt"><span style="color:black">SẢN PHẨM</span></span></u></strong></span></span></p>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Thảm ph&ograve;ng kh&aacute;ch BIRK l&agrave; một sản phẩm chất lượng, được l&agrave;m từ chất liệu polyester, c&oacute; m&agrave;u tự nhi&ecirc;n v&agrave; c&oacute; k&iacute;ch thước đường k&iacute;nh &Oslash;200cm. Dưới đ&acirc;y l&agrave; m&ocirc; tả chi tiết về sản phẩm n&agrave;y:</span></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Chất liệu</strong>: Thảm được l&agrave;m từ chất liệu polyester, một loại vật liệu nhẹ, bền v&agrave; dễ vệ sinh. Polyester cũng c&oacute; khả năng chống thấm nước v&agrave; m&agrave;i m&ograve;n, l&agrave;m cho sản phẩm n&agrave;y ph&ugrave; hợp cho sử dụng ở ph&ograve;ng kh&aacute;ch, nơi c&oacute; lưu lượng người đi lại nhiều.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>M&agrave;u sắc</strong>: Thảm c&oacute; m&agrave;u tự nhi&ecirc;n, tạo cảm gi&aacute;c gần gũi v&agrave; h&ograve;a m&igrave;nh v&agrave;o kh&ocirc;ng gian tự nhi&ecirc;n của căn ph&ograve;ng. M&agrave;u tự nhi&ecirc;n thường mang lại cảm gi&aacute;c gần gũi với thi&ecirc;n nhi&ecirc;n v&agrave; dễ d&agrave;ng phối hợp với nhiều phong c&aacute;ch trang tr&iacute; nội thất kh&aacute;c nhau.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>K&iacute;ch thước</strong>: Đường k&iacute;nh của thảm l&agrave; &Oslash;200cm, k&iacute;ch thước lớn v&agrave; ph&ugrave; hợp với nhiều k&iacute;ch thước kh&ocirc;ng gian ph&ograve;ng kh&aacute;ch kh&aacute;c nhau. Với k&iacute;ch thước n&agrave;y, thảm c&oacute; thể tạo ra một kh&ocirc;ng gian sang trọng v&agrave; thoải m&aacute;i cho gia đ&igrave;nh v&agrave; kh&aacute;ch mời.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Tiện &iacute;ch</strong>: Thảm ph&ograve;ng kh&aacute;ch BIRK kh&ocirc;ng chỉ l&agrave; một vật trang tr&iacute; đẹp mắt m&agrave; c&ograve;n gi&uacute;p giảm tiếng ồn, c&aacute;ch nhiệt v&agrave; tạo cảm gi&aacute;c ấm &aacute;p cho kh&ocirc;ng gian sống. Chất liệu polyester dễ d&agrave;ng vệ sinh v&agrave; bảo quản, gi&uacute;p sản phẩm duy tr&igrave; vẻ đẹp v&agrave; sức khỏe trong thời gian d&agrave;i sử dụng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Thiết kế</strong>: Thảm c&oacute; thiết kế đơn giản nhưng sang trọng, ph&ugrave; hợp với nhiều phong c&aacute;ch trang tr&iacute; nội thất kh&aacute;c nhau. Với m&agrave;u sắc tự nhi&ecirc;n v&agrave; đường k&iacute;nh lớn, thảm BIRK c&oacute; thể trở th&agrave;nh điểm nhấn trang tr&iacute; độc đ&aacute;o cho ph&ograve;ng kh&aacute;ch của bạn.</span></span></li>
            </ol>

            <p><span style="font-size:13pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Với những đặc điểm nổi bật về chất liệu, k&iacute;ch thước v&agrave; thiết kế, thảm ph&ograve;ng kh&aacute;ch BIRK sẽ l&agrave; một lựa chọn tuyệt vời để trang tr&iacute; v&agrave; tạo điểm nhấn cho kh&ocirc;ng gian ph&ograve;ng kh&aacute;ch của bạn.</span></span></p>

            <p>&nbsp;</p>
            ',
            'img'=> '46.jpg',
            'price'=>'0',
            'product_type_id'=>11,
            'status' => 1
        ]);
    }
}
