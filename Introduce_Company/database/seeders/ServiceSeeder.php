<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'name' => 'Tư vấn và thiết kế',
            'description'=> '<p style="text-align:center"><span style="font-size:20px"><u><strong>M&Ocirc; TẢ DỊCH VỤ</strong></u></span></p>
            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Tư vấn ban đầu v&agrave; ph&acirc;n t&iacute;ch</strong>: Trước khi bắt đầu một dự &aacute;n, c&ocirc;ng ty x&acirc;y dựng thường cung cấp c&aacute;c dịch vụ tư vấn ban đầu v&agrave; ph&acirc;n t&iacute;ch. Điều n&agrave;y bao gồm việc thăm d&ograve; nhu cầu của kh&aacute;ch h&agrave;ng, x&aacute;c định c&aacute;c y&ecirc;u cầu kỹ thuật v&agrave; hợp ph&aacute;p, v&agrave; thực hiện c&aacute;c nghi&ecirc;n cứu thị trường v&agrave; địa phương.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Thiết kế kiến tr&uacute;c</strong>: Dựa tr&ecirc;n c&aacute;c y&ecirc;u cầu v&agrave; th&ocirc;ng tin từ kh&aacute;ch h&agrave;ng, c&ocirc;ng ty x&acirc;y dựng sẽ tạo ra c&aacute;c thiết kế kiến tr&uacute;c cho dự &aacute;n. C&aacute;c thiết kế n&agrave;y bao gồm cả bản vẽ tổng quan của c&ocirc;ng tr&igrave;nh, cũng như c&aacute;c chi tiết về kiến tr&uacute;c, bố tr&iacute; kh&ocirc;ng gian, v&agrave; c&aacute;c yếu tố thẩm mỹ kh&aacute;c.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Thiết kế kỹ thuật</strong>: Sau khi ho&agrave;n th&agrave;nh thiết kế kiến tr&uacute;c, c&ocirc;ng ty x&acirc;y dựng sẽ tiến h&agrave;nh thiết kế kỹ thuật, bao gồm c&aacute;c bản vẽ chi tiết về cấu tr&uacute;c, hệ thống điện, hệ thống nước v&agrave; tho&aacute;t nước, hệ thống th&ocirc;ng gi&oacute; v&agrave; điều h&ograve;a kh&ocirc;ng kh&iacute;, vv. Thiết kế kỹ thuật n&agrave;y cần tu&acirc;n thủ c&aacute;c ti&ecirc;u chuẩn kỹ thuật v&agrave; quy định ph&aacute;p l&yacute;.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Đ&aacute;nh gi&aacute; m&ocirc;i trường v&agrave; bền vững</strong>: C&aacute;c c&ocirc;ng ty x&acirc;y dựng c&oacute; thể cung cấp dịch vụ đ&aacute;nh gi&aacute; m&ocirc;i trường v&agrave; bền vững để đảm bảo rằng dự &aacute;n x&acirc;y dựng tu&acirc;n thủ c&aacute;c ti&ecirc;u chuẩn bảo vệ m&ocirc;i trường v&agrave; tối ưu h&oacute;a sử dụng t&agrave;i nguy&ecirc;n.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Tư vấn ph&aacute;p l&yacute; v&agrave; giấy ph&eacute;p</strong>: Trong qu&aacute; tr&igrave;nh thiết kế, c&ocirc;ng ty x&acirc;y dựng c&oacute; thể hỗ trợ kh&aacute;ch h&agrave;ng trong việc xin giấy ph&eacute;p x&acirc;y dựng v&agrave; tu&acirc;n thủ c&aacute;c quy định ph&aacute;p luật li&ecirc;n quan đến quy hoạch v&agrave; x&acirc;y dựng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>M&ocirc; phỏng v&agrave; h&igrave;nh ảnh 3D</strong>: Cung cấp dịch vụ tạo ra m&ocirc; h&igrave;nh v&agrave; h&igrave;nh ảnh 3D của dự &aacute;n để gi&uacute;p kh&aacute;ch h&agrave;ng h&igrave;nh dung v&agrave; hiểu r&otilde; hơn về thiết kế trước khi thực hiện.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Quản l&yacute; thiết kế</strong>: Đảm bảo rằng qu&aacute; tr&igrave;nh thiết kế diễn ra một c&aacute;ch su&ocirc;n sẻ v&agrave; hiệu quả, từ việc quản l&yacute; t&agrave;i liệu đến việc đảm bảo sự tương t&aacute;c hợp l&yacute; giữa c&aacute;c bộ phận thiết kế kh&aacute;c nhau.</span></span></li>
            </ol>
            <p>&nbsp;</p>
            ',
            'status' => 1
        ]);
        DB::table('services')->insert([
            'name' => 'Xây dựng và thi công',
            'description'=> '<p style="text-align:center"><span style="font-size:20px"><u><strong>M&Ocirc; TẢ DỊCH VỤ</strong></u></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Chuẩn bị mặt bằng</strong>: C&ocirc;ng việc đầu ti&ecirc;n của dịch vụ x&acirc;y dựng v&agrave; thi c&ocirc;ng l&agrave; chuẩn bị mặt bằng x&acirc;y dựng. Điều n&agrave;y bao gồm việc l&agrave;m phẳng đất, loại bỏ vật liệu kh&ocirc;ng mong muốn, v&agrave; chuẩn bị nền m&oacute;ng cho c&ocirc;ng tr&igrave;nh.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>X&acirc;y dựng cấu tr&uacute;c ch&iacute;nh</strong>: Sau khi mặt bằng đ&atilde; được chuẩn bị, c&ocirc;ng ty x&acirc;y dựng tiến h&agrave;nh x&acirc;y dựng c&aacute;c cấu tr&uacute;c ch&iacute;nh của c&ocirc;ng tr&igrave;nh, bao gồm cả tường, m&oacute;ng, s&agrave;n, trần, v&agrave; m&aacute;i.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Lắp đặt hệ thống nội thất v&agrave; hạng mục c&ocirc;ng nghệ</strong>: Sau khi cấu tr&uacute;c ch&iacute;nh đ&atilde; ho&agrave;n th&agrave;nh, c&ocirc;ng ty x&acirc;y dựng tiến h&agrave;nh lắp đặt c&aacute;c hệ thống nội thất như đ&egrave;n, thiết bị vệ sinh, tủ bếp, vv., cũng như c&aacute;c hạng mục c&ocirc;ng nghệ như hệ thống điện, hệ thống th&ocirc;ng gi&oacute;, hệ thống an ninh, vv.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Ho&agrave;n thiện v&agrave; trang tr&iacute;</strong>: Sau khi c&aacute;c hệ thống đ&atilde; được lắp đặt, c&ocirc;ng ty x&acirc;y dựng tiến h&agrave;nh ho&agrave;n thiện c&aacute;c bề mặt v&agrave; trang tr&iacute; c&ocirc;ng tr&igrave;nh, bao gồm sơn, l&aacute;t gạch, l&aacute;t đ&aacute;, vv., để tạo ra vẻ đẹp v&agrave; chức năng cho c&ocirc;ng tr&igrave;nh.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Kiểm tra v&agrave; b&agrave;n giao</strong>: Cuối c&ugrave;ng, sau khi c&ocirc;ng tr&igrave;nh đ&atilde; ho&agrave;n th&agrave;nh, c&ocirc;ng ty x&acirc;y dựng tiến h&agrave;nh c&aacute;c bước kiểm tra cuối c&ugrave;ng để đảm bảo rằng mọi thứ hoạt động đ&uacute;ng c&aacute;ch v&agrave; đ&aacute;p ứng c&aacute;c ti&ecirc;u chuẩn chất lượng. Sau đ&oacute;, c&ocirc;ng tr&igrave;nh được b&agrave;n giao cho kh&aacute;ch h&agrave;ng hoặc chủ sở hữu.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Dịch vụ bảo tr&igrave; v&agrave; hỗ trợ sau b&aacute;n h&agrave;ng</strong>: Ngo&agrave;i việc thi c&ocirc;ng, một số c&ocirc;ng ty x&acirc;y dựng cũng cung cấp dịch vụ bảo tr&igrave; v&agrave; hỗ trợ sau b&aacute;n h&agrave;ng, bao gồm việc bảo tr&igrave; c&aacute;c hệ thống v&agrave; thiết bị, v&agrave; hỗ trợ kh&aacute;ch h&agrave;ng trong việc giải quyết c&aacute;c vấn đề sau khi nhận b&agrave;n giao c&ocirc;ng tr&igrave;nh.</span></span></li>
            </ol>
            ',
            'status' => 1
        ]);
        DB::table('services')->insert([
            'name' => 'Sửa chữa và bảo trì',
            'description'=> '<p style="text-align:center"><strong><u><span style="font-size:20px">M&Ocirc; TẢ DỊCH VỤ</span></u></strong></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Kiểm tra v&agrave; đ&aacute;nh gi&aacute;</strong>: Đ&acirc;y l&agrave; bước đầu ti&ecirc;n trong dịch vụ sửa chữa v&agrave; bảo tr&igrave;. C&ocirc;ng ty x&acirc;y dựng sẽ tiến h&agrave;nh kiểm tra v&agrave; đ&aacute;nh gi&aacute; t&igrave;nh trạng hiện tại của c&ocirc;ng tr&igrave;nh, x&aacute;c định c&aacute;c vấn đề cần phải được giải quyết v&agrave; ưu ti&ecirc;n c&aacute;c c&ocirc;ng việc cần thực hiện.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Bảo dưỡng định kỳ</strong>: C&aacute;c dịch vụ bảo tr&igrave; định kỳ thường bao gồm việc kiểm tra v&agrave; bảo dưỡng c&aacute;c hệ thống v&agrave; thiết bị, như hệ thống điện, hệ thống nước v&agrave; tho&aacute;t nước, hệ thống th&ocirc;ng gi&oacute; v&agrave; điều h&ograve;a kh&ocirc;ng kh&iacute;, vv. C&ocirc;ng ty x&acirc;y dựng sẽ lập kế hoạch v&agrave; thực hiện c&aacute;c c&ocirc;ng việc bảo dưỡng n&agrave;y theo định kỳ để đảm bảo rằng c&aacute;c hệ thống hoạt động hiệu quả v&agrave; giảm thiểu rủi ro sự cố.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Sửa chữa v&agrave; thay thế</strong>: Khi ph&aacute;t hiện c&aacute;c vấn đề trong qu&aacute; tr&igrave;nh kiểm tra v&agrave; đ&aacute;nh gi&aacute;, c&ocirc;ng ty x&acirc;y dựng sẽ tiến h&agrave;nh c&aacute;c c&ocirc;ng việc sửa chữa v&agrave; thay thế cần thiết. Điều n&agrave;y c&oacute; thể bao gồm việc sửa chữa c&aacute;c hư hỏng, thay thế c&aacute;c bộ phận cũ, v&agrave; cải thiện c&aacute;c hệ thống v&agrave; thiết bị để đảm bảo hiệu suất hoạt động tốt nhất.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>N&acirc;ng cấp v&agrave; cải tiến</strong>: Ngo&agrave;i việc sửa chữa c&aacute;c vấn đề hiện tại, c&ocirc;ng ty x&acirc;y dựng cũng c&oacute; thể đề xuất c&aacute;c n&acirc;ng cấp v&agrave; cải tiến để cải thiện hiệu suất v&agrave; chức năng của c&ocirc;ng tr&igrave;nh. Điều n&agrave;y c&oacute; thể bao gồm việc n&acirc;ng cấp hệ thống để tiết kiệm năng lượng, cải thiện chất lượng kh&ocirc;ng kh&iacute;, hoặc tăng cường an ninh v&agrave; an to&agrave;n.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Dịch vụ khẩn cấp</strong>: C&ocirc;ng ty x&acirc;y dựng cung cấp dịch vụ khẩn cấp để xử l&yacute; c&aacute;c sự cố gấp đang xảy ra, như hỏa hoạn, r&ograve; rỉ nước, hoặc hư hỏng cấu tr&uacute;c. Nh&acirc;n vi&ecirc;n kỹ thuật được sẵn s&agrave;ng phản ứng v&agrave; xử l&yacute; c&aacute;c t&igrave;nh huống n&agrave;y một c&aacute;ch nhanh ch&oacute;ng v&agrave; hiệu quả.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Tư vấn v&agrave; hỗ trợ</strong>: C&ocirc;ng ty x&acirc;y dựng cung cấp tư vấn v&agrave; hỗ trợ cho kh&aacute;ch h&agrave;ng về c&aacute;c vấn đề li&ecirc;n quan đến bảo tr&igrave; v&agrave; sửa chữa, bao gồm cả việc lập kế hoạch bảo tr&igrave;, đ&aacute;nh gi&aacute; t&igrave;nh trạng c&ocirc;ng tr&igrave;nh, v&agrave; giải quyết c&aacute;c vấn đề kỹ thuật.</span></span></li>
            </ol>
            ',
            'status' => 1
        ]);
        DB::table('services')->insert([
            'name' => 'Tư vấn pháp lý và giấy phép',
            'description'=> '<p style="text-align:center"><span style="font-size:20px"><u><strong>M&Ocirc; TẢ DỊCH VỤ</strong></u></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Tư vấn ph&aacute;p l&yacute;</strong>: C&ocirc;ng ty x&acirc;y dựng cung cấp tư vấn ph&aacute;p l&yacute; để đảm bảo rằng c&aacute;c dự &aacute;n x&acirc;y dựng tu&acirc;n thủ đầy đủ c&aacute;c quy định ph&aacute;p luật li&ecirc;n quan. Điều n&agrave;y c&oacute; thể bao gồm tư vấn về c&aacute;c quy định x&acirc;y dựng địa phương, quy định về an to&agrave;n lao động v&agrave; bảo vệ m&ocirc;i trường, v&agrave; c&aacute;c y&ecirc;u cầu ph&aacute;p l&yacute; về bảo vệ người lao động v&agrave; quyền lợi của kh&aacute;ch h&agrave;ng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Xin giấy ph&eacute;p x&acirc;y dựng</strong>: C&ocirc;ng ty x&acirc;y dựng hỗ trợ kh&aacute;ch h&agrave;ng trong việc thu thập v&agrave; nộp đơn xin cấp giấy ph&eacute;p x&acirc;y dựng cho c&aacute;c dự &aacute;n. Điều n&agrave;y bao gồm việc chuẩn bị v&agrave; nộp c&aacute;c t&agrave;i liệu cần thiết, như bản vẽ thiết kế, bản địa chỉ, v&agrave; c&aacute;c bằng chứng về tu&acirc;n thủ c&aacute;c quy định ph&aacute;p luật li&ecirc;n quan.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Xin c&aacute;c giấy ph&eacute;p v&agrave; chứng chỉ kh&aacute;c</strong>: Ngo&agrave;i giấy ph&eacute;p x&acirc;y dựng, c&aacute;c dự &aacute;n x&acirc;y dựng c&oacute; thể cần c&aacute;c giấy ph&eacute;p v&agrave; chứng chỉ kh&aacute;c, như giấy ph&eacute;p sử dụng đất, giấy ph&eacute;p thi c&ocirc;ng, chứng chỉ kiểm định chất lượng, vv. C&ocirc;ng ty x&acirc;y dựng hỗ trợ kh&aacute;ch h&agrave;ng trong việc thu thập v&agrave; nộp c&aacute;c giấy tờ n&agrave;y theo y&ecirc;u cầu của cơ quan chức năng.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Thực hiện c&aacute;c thủ tục ph&aacute;p l&yacute;</strong>: C&ocirc;ng ty x&acirc;y dựng đại diện cho kh&aacute;ch h&agrave;ng trong việc thực hiện c&aacute;c thủ tục ph&aacute;p l&yacute; li&ecirc;n quan đến dự &aacute;n, như thương thảo với c&aacute;c cơ quan chức năng, thực hiện c&aacute;c thủ tục ph&aacute;p l&yacute; li&ecirc;n quan đến mua b&aacute;n v&agrave; cho thu&ecirc; đất, v&agrave; giải quyết c&aacute;c tranh chấp ph&aacute;p l&yacute; li&ecirc;n quan đến dự &aacute;n.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Cập nhật về quy định ph&aacute;p luật</strong>: C&ocirc;ng ty x&acirc;y dựng cung cấp th&ocirc;ng tin cập nhật về c&aacute;c quy định ph&aacute;p luật mới nhất li&ecirc;n quan đến ng&agrave;nh x&acirc;y dựng v&agrave; đề xuất c&aacute;c biện ph&aacute;p tu&acirc;n thủ cho kh&aacute;ch h&agrave;ng.</span></span></li>
            </ol>

            <p>&nbsp;</p>
            ',
            'status' => 1
        ]);
        DB::table('services')->insert([
            'name' => 'Quản lý dự án',
            'description'=> '<p style="text-align:center"><span style="font-size:20px"><u><strong>M&Ocirc; TẢ DỊCH VỤ</strong></u></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Lập kế hoạch dự &aacute;n</strong>: C&ocirc;ng ty x&acirc;y dựng sẽ tham gia v&agrave;o qu&aacute; tr&igrave;nh lập kế hoạch dự &aacute;n từ đầu, bao gồm việc x&aacute;c định mục ti&ecirc;u, phạm vi, lịch tr&igrave;nh, ng&acirc;n s&aacute;ch v&agrave; c&aacute;c y&ecirc;u cầu kỹ thuật của dự &aacute;n.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Quản l&yacute; nguồn lực</strong>: Dịch vụ quản l&yacute; dự &aacute;n bao gồm việc quản l&yacute; v&agrave; ph&acirc;n bổ nguồn lực như lao động, vật liệu, thiết bị, v&agrave; ng&acirc;n s&aacute;ch để đảm bảo rằng dự &aacute;n được thực hiện theo kế hoạch v&agrave; đ&uacute;ng tiến độ.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Lập lịch v&agrave; điều phối</strong>: C&ocirc;ng ty x&acirc;y dựng sẽ lập lịch tr&igrave;nh cho c&aacute;c hoạt động của dự &aacute;n v&agrave; điều phối c&aacute;c c&ocirc;ng việc giữa c&aacute;c bộ phận kh&aacute;c nhau để đảm bảo rằng mọi người v&agrave; t&agrave;i nguy&ecirc;n đều hoạt động một c&aacute;ch hiệu quả v&agrave; hợp nhất.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Quản l&yacute; rủi ro</strong>: Dịch vụ quản l&yacute; dự &aacute;n cũng bao gồm việc đ&aacute;nh gi&aacute; v&agrave; quản l&yacute; c&aacute;c rủi ro c&oacute; thể xảy ra trong qu&aacute; tr&igrave;nh thực hiện dự &aacute;n, v&agrave; ph&aacute;t triển c&aacute;c kế hoạch ph&ograve;ng ngừa v&agrave; ứng ph&oacute; khi cần thiết.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Gi&aacute;m s&aacute;t tiến độ v&agrave; chất lượng</strong>: C&ocirc;ng ty x&acirc;y dựng sẽ gi&aacute;m s&aacute;t tiến độ v&agrave; chất lượng của c&aacute;c hoạt động x&acirc;y dựng để đảm bảo rằng dự &aacute;n được thực hiện đ&uacute;ng tiến độ v&agrave; đạt được c&aacute;c ti&ecirc;u chuẩn chất lượng quy định.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>B&aacute;o c&aacute;o v&agrave; giao tiếp</strong>: Dịch vụ quản l&yacute; dự &aacute;n cũng bao gồm việc lập v&agrave; ph&acirc;n phối c&aacute;c b&aacute;o c&aacute;o tiến độ v&agrave; chất lượng cho kh&aacute;ch h&agrave;ng v&agrave; c&aacute;c b&ecirc;n li&ecirc;n quan, cũng như duy tr&igrave; c&aacute;c k&ecirc;nh giao tiếp hiệu quả giữa c&aacute;c bộ phận v&agrave; đối t&aacute;c trong dự &aacute;n.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Quản l&yacute; hợp đồng v&agrave; t&agrave;i ch&iacute;nh</strong>: C&ocirc;ng ty x&acirc;y dựng c&oacute; thể hỗ trợ kh&aacute;ch h&agrave;ng trong việc quản l&yacute; c&aacute;c hợp đồng v&agrave; t&agrave;i ch&iacute;nh li&ecirc;n quan đến dự &aacute;n, bao gồm việc soạn thảo hợp đồng, theo d&otilde;i chi ph&iacute;, v&agrave; x&aacute;c nhận thanh to&aacute;n.</span></span></li>
            </ol>
            ',
            'status' => 1
        ]);
        DB::table('services')->insert([
            'name' => 'Dịch vụ kỹ thuật ',
            'description'=> '<p style="text-align:center"><span style="font-size:20px"><u><strong>M&Ocirc; TẢ DỊCH VỤ</strong></u></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Kiểm tra kỹ thuật</strong>: C&ocirc;ng ty x&acirc;y dựng thực hiện kiểm tra kỹ thuật để đảm bảo rằng c&aacute;c c&ocirc;ng tr&igrave;nh x&acirc;y dựng được thiết kế v&agrave; x&acirc;y dựng theo c&aacute;c ti&ecirc;u chuẩn kỹ thuật v&agrave; quy định ph&aacute;p luật. Điều n&agrave;y bao gồm kiểm tra kỹ thuật về cấu tr&uacute;c, hệ thống điện, hệ thống nước v&agrave; tho&aacute;t nước, hệ thống th&ocirc;ng gi&oacute; v&agrave; điều h&ograve;a kh&ocirc;ng kh&iacute;, vv.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Đ&aacute;nh gi&aacute; vật liệu v&agrave; c&ocirc;ng nghệ</strong>: C&ocirc;ng ty x&acirc;y dựng thực hiện c&aacute;c đ&aacute;nh gi&aacute; về vật liệu x&acirc;y dựng v&agrave; c&ocirc;ng nghệ mới để đảm bảo rằng dự &aacute;n sử dụng c&aacute;c vật liệu v&agrave; c&ocirc;ng nghệ ti&ecirc;n tiến nhất v&agrave; ph&ugrave; hợp nhất với y&ecirc;u cầu cụ thể của dự &aacute;n.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Thử nghiệm v&agrave; kiểm định</strong>: C&ocirc;ng ty x&acirc;y dựng c&oacute; thể thực hiện c&aacute;c thử nghiệm v&agrave; kiểm định vật liệu v&agrave; c&ocirc;ng tr&igrave;nh để đảm bảo rằng ch&uacute;ng đ&aacute;p ứng c&aacute;c ti&ecirc;u chuẩn chất lượng v&agrave; an to&agrave;n quy định.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Tư vấn kỹ thuật</strong>: C&ocirc;ng ty x&acirc;y dựng cung cấp tư vấn kỹ thuật cho c&aacute;c bước trong qu&aacute; tr&igrave;nh thiết kế, x&acirc;y dựng v&agrave; quản l&yacute; dự &aacute;n, bao gồm tư vấn về cấu tr&uacute;c, thiết kế kỹ thuật, lựa chọn vật liệu, hệ thống v&agrave; thiết bị, vv.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Ph&aacute;t triển v&agrave; thiết kế kỹ thuật</strong>: C&ocirc;ng ty x&acirc;y dựng c&oacute; thể tham gia v&agrave;o qu&aacute; tr&igrave;nh ph&aacute;t triển v&agrave; thiết kế kỹ thuật của c&aacute;c dự &aacute;n, bao gồm việc tạo ra bản vẽ kỹ thuật chi tiết, m&ocirc; phỏng v&agrave; h&igrave;nh ảnh 3D, v&agrave; ph&acirc;n t&iacute;ch kỹ thuật.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Nghi&ecirc;n cứu v&agrave; ph&aacute;t triển</strong>: Một số c&ocirc;ng ty x&acirc;y dựng c&oacute; thể thực hiện c&aacute;c hoạt động nghi&ecirc;n cứu v&agrave; ph&aacute;t triển để ph&aacute;t triển c&aacute;c giải ph&aacute;p v&agrave; c&ocirc;ng nghệ mới trong lĩnh vực x&acirc;y dựng.</span></span></li>
            </ol>

            <p>&nbsp;</p>
            ',
            'status' => 1
        ]);
        DB::table('services')->insert([
            'name' => 'Xây dựng bền vững',
            'description'=> '<p style="text-align:center"><span style="font-size:20px"><u><strong>M&Ocirc; TẢ DỊCH VỤ</strong></u></span></p>

            <ol>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Thiết kế v&agrave; x&acirc;y dựng bền vững</strong>: C&ocirc;ng ty x&acirc;y dựng cung cấp c&aacute;c dịch vụ thiết kế v&agrave; x&acirc;y dựng bền vững nhằm tối ưu h&oacute;a hiệu suất năng lượng, tối ưu h&oacute;a sử dụng t&agrave;i nguy&ecirc;n tự nhi&ecirc;n, v&agrave; giảm thiểu lượng chất thải. Điều n&agrave;y c&oacute; thể bao gồm việc sử dụng vật liệu t&aacute;i chế, lắp đặt hệ thống năng lượng mặt trời, cải thiện c&aacute;ch c&aacute;ch c&aacute;ch nhiệt v&agrave; c&aacute;ch &acirc;m của c&ocirc;ng tr&igrave;nh, vv.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Đ&aacute;nh gi&aacute; m&ocirc;i trường v&agrave; bền vững</strong>: C&ocirc;ng ty x&acirc;y dựng thực hiện c&aacute;c đ&aacute;nh gi&aacute; về t&aacute;c động m&ocirc;i trường của c&aacute;c dự &aacute;n v&agrave; đề xuất c&aacute;c biện ph&aacute;p để giảm thiểu t&aacute;c động ti&ecirc;u cực đến m&ocirc;i trường, bao gồm cả việc bảo vệ c&aacute;c v&ugrave;ng đất cảnh quan, đảm bảo sự đa dạng sinh học v&agrave; giảm lượng kh&iacute; thải carbon.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Quản l&yacute; nước v&agrave; chất thải</strong>: C&ocirc;ng ty x&acirc;y dựng c&oacute; thể cung cấp c&aacute;c giải ph&aacute;p quản l&yacute; nước v&agrave; chất thải nhằm giảm thiểu lượng nước thải v&agrave; chất thải sinh ra từ c&aacute;c dự &aacute;n x&acirc;y dựng, bao gồm cả việc lắp đặt hệ thống xử l&yacute; nước thải, t&aacute;i chế v&agrave; t&aacute;i sử dụng chất thải x&acirc;y dựng, v&agrave; quản l&yacute; chất thải theo c&aacute;ch tiết kiệm v&agrave; hiệu quả.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Gi&aacute;o dục v&agrave; tư vấn về x&acirc;y dựng bền vững</strong>: C&ocirc;ng ty x&acirc;y dựng c&oacute; thể cung cấp c&aacute;c chương tr&igrave;nh gi&aacute;o dục v&agrave; tư vấn về x&acirc;y dựng bền vững cho kh&aacute;ch h&agrave;ng v&agrave; cộng đồng, nhằm tăng cường nhận thức về t&aacute;c động của c&aacute;c dự &aacute;n x&acirc;y dựng đến m&ocirc;i trường v&agrave; khuyến kh&iacute;ch c&aacute;c phương ph&aacute;p x&acirc;y dựng bền vững.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Chứng nhận v&agrave; tu&acirc;n thủ c&aacute;c ti&ecirc;u chuẩn bền vững</strong>: C&ocirc;ng ty x&acirc;y dựng c&oacute; thể hỗ trợ kh&aacute;ch h&agrave;ng trong việc đạt c&aacute;c chứng nhận v&agrave; tu&acirc;n thủ c&aacute;c ti&ecirc;u chuẩn bền vững quốc tế như LEED (Leadership in Energy and Environmental Design), EDGE (Excellence in Design for Greater Efficiencies), BREEAM (Building Research Establishment Environmental Assessment Method), v&agrave; c&aacute;c ti&ecirc;u chuẩn bền vững quốc gia kh&aacute;c.</span></span></li>
            </ol>
            ',
            'status' => 1
        ]);
        DB::table('services')->insert([
            'name' => 'Dịch vụ tư vấn hoạt động',
            'description'=> '<p style="text-align:center"><span style="font-size:20px"><u><strong>M&Ocirc; TẢ DỊCH VỤ</strong></u></span></p>
            <ul>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Tư vấn vận h&agrave;nh</strong>: Cung cấp tư vấn về c&aacute;ch vận h&agrave;nh c&aacute;c hệ thống v&agrave; thiết bị trong c&ocirc;ng tr&igrave;nh x&acirc;y dựng, bao gồm hệ thống điện, hệ thống nước v&agrave; tho&aacute;t nước, hệ thống th&ocirc;ng gi&oacute; v&agrave; điều h&ograve;a kh&ocirc;ng kh&iacute;, hệ thống an ninh, vv. Điều n&agrave;y c&oacute; thể bao gồm việc đ&agrave;o tạo nh&acirc;n vi&ecirc;n vận h&agrave;nh v&agrave; cung cấp t&agrave;i liệu hướng dẫn.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Tư vấn bảo tr&igrave; v&agrave; sửa chữa</strong>: Hỗ trợ kh&aacute;ch h&agrave;ng trong việc lập kế hoạch v&agrave; thực hiện c&aacute;c c&ocirc;ng việc bảo tr&igrave; định kỳ, bảo dưỡng v&agrave; sửa chữa cho c&aacute;c th&agrave;nh phần của c&ocirc;ng tr&igrave;nh, như m&aacute;y m&oacute;c, thiết bị, kết cấu v&agrave; hệ thống.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Gi&aacute;m s&aacute;t v&agrave; kiểm tra</strong>: Thực hiện c&aacute;c đợt kiểm tra định kỳ để đảm bảo rằng c&aacute;c hệ thống v&agrave; cơ sở hạ tầng của c&ocirc;ng tr&igrave;nh vẫn hoạt động hiệu quả v&agrave; an to&agrave;n. C&aacute;c kiểm tra n&agrave;y c&oacute; thể bao gồm kiểm tra an ninh, kiểm tra về chất lượng kh&ocirc;ng kh&iacute;, kiểm tra độ bền của kết cấu, vv.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Tối ưu h&oacute;a hiệu suất v&agrave; tiết kiệm năng lượng</strong>: Tư vấn v&agrave; triển khai c&aacute;c biện ph&aacute;p để tối ưu h&oacute;a hiệu suất hoạt động của c&aacute;c hệ thống v&agrave; thiết bị trong c&ocirc;ng tr&igrave;nh, cũng như giảm ti&ecirc;u thụ năng lượng v&agrave; tối ưu h&oacute;a c&aacute;c quy tr&igrave;nh vận h&agrave;nh.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Quản l&yacute; rủi ro v&agrave; khắc phục sự cố</strong>: Hỗ trợ kh&aacute;ch h&agrave;ng trong việc đ&aacute;nh gi&aacute; v&agrave; quản l&yacute; c&aacute;c rủi ro li&ecirc;n quan đến vận h&agrave;nh v&agrave; bảo tr&igrave; của c&ocirc;ng tr&igrave;nh, cũng như trong việc xử l&yacute; c&aacute;c sự cố khi ch&uacute;ng xảy ra.</span></span></li>
                <li><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif"><strong>Hỗ trợ kỹ thuật v&agrave; dịch vụ kh&aacute;ch h&agrave;ng</strong>: Cung cấp hỗ trợ kỹ thuật v&agrave; tư vấn cho kh&aacute;ch h&agrave;ng khi gặp vấn đề trong qu&aacute; tr&igrave;nh vận h&agrave;nh v&agrave; bảo tr&igrave;, bao gồm cả việc cung cấp dịch vụ sửa chữa v&agrave; thay thế.</span></span></li>
            </ul>

            <p><span style="font-size:13pt"><span style="font-family:&quot;UTM Aptima&quot;,serif">Dịch vụ tư vấn hoạt động n&agrave;y gi&uacute;p kh&aacute;ch h&agrave;ng duy tr&igrave; v&agrave; tối ưu h&oacute;a hoạt động của c&ocirc;ng tr&igrave;nh x&acirc;y dựng sau khi đ&atilde; ho&agrave;n th&agrave;nh, đồng thời giảm thiểu sự cố v&agrave; chi ph&iacute; li&ecirc;n quan đến bảo tr&igrave; v&agrave; sửa chữa.</span></span></p>
            ',
            'status' => 1
        ]);

    }
}
