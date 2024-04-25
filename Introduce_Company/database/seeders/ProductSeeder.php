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
            'description'=> 'Gạch xây dựng được chia thành nhiều loại khác nhau, nhưng chung quy gồm 2 loại cơ bản là gạch đất nung và gạch không nung. Gạch đất nung là loại gạch truyền thống rất phổ biến trong các công trình ở Việt Nam với tỷ lệ sử dụng chiếm tới 80%. Thành phần nguyên liệu của gạch đất nung là đất sét được nung ở nhiệt độ cao.',
            'img'=> '',
            'price'=>'0',
            'product_type_id'=>1,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Xi Măng Thăng Long',
            'description'=> 'Xi măng Thăng Long là một trong những thương hiệu xi măng hàng đầu tại Việt Nam, được sản xuất bởi Công ty Cổ phần Xi măng Thăng Long. Sản phẩm này được sản xuất từ các nguyên liệu chất lượng cao và được sản xuất trên dây chuyền công nghệ hiện đại, đảm bảo chất lượng và độ bền cao.',
            'img'=> '',
            'price'=>'0',
            'product_type_id'=>1,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Thép Pomina',
            'description'=> 'Nói đến thương hiệu sắt thép chất lượng hàng đầu được đông đảo chủ thầu, chủ đầu tư, người dân sử dụng cho công trình xây dựng của mình, phải kể đến thương hiệu thép Pomina. Thép Pomina được ưa chuộng và sử dụng nhiều nhất hiện nay là vì ưu điểm chắc chắn, bền, dẻo, đặc biệt là với khả năng chống chịu dưới mọi tác động của môi trường mà không bị gỉ sét.',
            'img'=> '',
            'price'=>'0',
            'product_type_id'=>1,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Thép Phi 20 Việt Nhật',
            'description'=> 'Thép Phi 20 là một loại thép xây dựng thông dụng được sử dụng trong các công trình xây dựng như nhà dân dụng, nhà cao tầng, cầu đường, cơ sở hạ tầng và các công trình khác. Thép Phi 20 thường được sử dụng để gia cố và tạo độ bền cho kết cấu, như móng, cột, dầm, đà, vữa tường, và tường chịu tải.',
            'img'=> '',
            'price'=>'0',
            'product_type_id'=>1,
            'status' => 1
        ]);
        //VL lót sàn
        DB::table('products')->insert([
            'name' => 'Sàn gỗ ShopHouse SH160',
            'description'=> 'Sàn gỗ nội thất SHOPHOUSE giá rẻ hiện nay được ưa chuộng với những ưu điểm, chi phí thấp, vân gỗ tự nhiên, lắp đặt nhanh và bề mặt không bám bụi dễ vệ sinh, chống trầy xước, chống cháy, chống hóa chất ăn mòn, giá thành phù hợp cho tất cả mọi người, mang đến sự tiện nghi, cảm giác ấm áp và dễ chịu.',
            'img'=> '',
            'price'=>'185000',
            'product_type_id'=>2,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Đá Hoa Cương River White',
            'description'=> 'Đá hoa cương River White là dòng đá Granite được khai thác tại Ấn Độ . Đá River White  được đặc trưng bởi những đường vân mảnh màu đen trải dài như nhữn gợn sóng trên mặt hồ. Điểm xuyến là các hạt chấm màu đen trải đều trên mặt đá.',
            'img'=> '',
            'price'=>'2050000',
            'product_type_id'=>2,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Sàn Gỗ Công Nghiệp Robina 12mm Bản Lớn W25- Sàn Malaysia Chịu Nước',
            'description'=> 'Sàn gỗ công nghiệp Robina là một trong những sản phẩm sàn gỗ công nghiệp được tin dùng trên thị trường hiện nay. Với chất lượng sản phẩm và dịch vụ tốt, Robina đã trở thành một trong những thương hiệu được nhiều khách hàng tin tưởng và lựa chọn.',
            'img'=> '',
            'price'=>'475000',
            'product_type_id'=>2,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Tấm ốp vân đá PVC3009',
            'description'=> 'Tấm ốp vân đá PVC3009 với thiết kế mô phỏng bề mặt đá quý màu nâu đỏ với màu sắc đậm nhạt vân 3D đậm nhạt  được thiết kế hài hòa tạo cảm giác chân thực hơn cho bề mặt giả đá của tấm ốp, sản phẩm dễ dàng kết hợp với nhiều phong cách trang trí nội thất khác nhau, mang lại sự cuốn hút , cá tính , sang trọng cho ngôi nhà của bạn.',
            'img'=> '',
            'price'=>'0',
            'product_type_id'=>2,
            'status' => 1
        ]);
        // trang trí ngoại thất
        DB::table('products')->insert([
            'name' => 'Đá Kim Sa Trung',
            'description'=> 'Đá hoa cương Kim Sa Trung(hay Black Galaxy Granite) là một loại đá thuộc dòng đá granite tự nhiên được khai thác chủ yếu từ tiểu bang Andhra Pradesh của Ấn Độ, một trong những trung tâm chính về sản xuất và cung cấp đá tự nhiên. Đá Kim Sa Trung thường được tìm thấy trong các vỉa mỏ lớn dưới lòng đất, và sau đó được khai thác và chế tác để tạo thành các tấm đá sẵn sàng cho việc sử dụng trong xây dựng và trang trí. Đá này nổi bật với vẻ đẹp tự nhiên của mình, với các hạt sáng lấp lánh trên nền đen chủ đạo, mang lại một vẻ ngoài sang trọng và độc đáo.',
            'img'=> '',
            'price'=>'0',
            'product_type_id'=>3,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Gạch Mosaic hình chiếc lá men bóng màu xanh, vàng MT-MSCL00002',
            'description'=> 'Gạch Mosaic hình chiếc lá men bóng màu xanh, vàng MT-MSCL00002 được kết hợp từ những viên đá mosaic có hình dạng đèn lồng. Sản phẩm có vẻ đẹp độc đáo, được nhiều người lựa chọn để ốp trang trí, tạo điểm nhấn với độ thẩm mỹ cao cấp.',
            'img'=> '',
            'price'=>'2200000',
            'product_type_id'=>3,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Gạch Tkg (Taicera) G68987 - Onyx Stone Series - Grey',
            'description'=> 'Gạch Taicera G68987 - Glazed Porceline Tiles - Onyx Stone Series - Grey
            - Series Onyx Stone được lấy ý tưởng từ nguồn gỗ hóa thạch, với những đường hoa văn đa dạng tự nhiên và bề mặt hơi gồ ghề được sản xuất theo công nghệ in phun kỹ thuật số hiện đại.
            - Sản phẩm có 4 màu sắc chủ đạo: trắng, kem, xám nhạt, xám đậm,… và được hoàn thiện với kết cấu đồng chất mang tính ứng dụng cao khi được sử dụng trong các thiết kế nội ngoại thất và đặc biệt ở những khu biệt thự, khách sạn, đại sảnh, khu dân cư cao cấp,….',
            'img'=> '',
            'price'=>'300000',
            'product_type_id'=>3,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Tấm mica gương',
            'description'=> 'Tấm mica gương còn có một tên gọi khác là nhựa mica rất được ưa chuộng trên thị trường. Sản phẩm được cấu tạo bởi 2 lớp: Lớp dưới là nhựa Acrylic, lớp trên được tráng gương một cách khá chỉn chu để có thể tạo được độ phản nét tốt. Chính vì thế mà chất lượng của mica gương cũng được đánh giá cao không khác gì kính, gương thông thường.',
            'img'=> '',
            'price'=>'1200000',
            'product_type_id'=>3,
            'status' => 1
        ]);
        //Cửa sổ và cửa
        DB::table('products')->insert([
            'name' => 'Cửa Gỗ Công Nghiệp Mdf Sơn PU',
            'description'=> 'Cửa gỗ MDF veneer sơn PU thích hợp sử dụng làm cửa chính căn hộ hoặc cửa phòng master ở các công trình biệt thự. Đây là mẫu cửa mà Caophatdoor đã thi công và lắp đặt cho nhiều công trình ở khắp mọi nơi, quý khách cùng xem nhé.',
            'img'=> '',
            'price'=>'1600000',
            'product_type_id'=>4,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Cửa Nhựa Đài Loan Ghép Thanh',
            'description'=> 'Chúng tôi hân hạnh giới thiệu dòng cửa nhựa Đài Loan chất lượng, Cửa nhựa đài loan ghép thanh, với đơn giá đã bao gồm cánh, khung bao, và nẹp chỉ 2 mặt. Các cửa có kích thước chuẩn 800 x 2.050mm, và chúng tôi cũng mang đến dịch vụ kỹ thuật khảo sát và lấy kích thước miễn phí tại Tp HCM.            ',
            'img'=> '',
            'price'=>'2000000',
            'product_type_id'=>4,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Cửa Nhôm Kính Phòng Ngủ',
            'description'=> 'Cửa phòng ngủ nhôm kính hay cửa nhôm phòng ngủ là cửa phòng được sử dụng vật liệu là khung nhôm kết hợp với kính và họa tiết in trên kính rất đa dạng và phong phú, mọi người tham khảo các mẫu dưới đây do Công Ty Minh Tân sản xuất và lắp đặt.',
            'img'=> '',
            'price'=>'0',
            'product_type_id'=>4,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Cửa Thép Vân Gỗ Galaxy 4 Cánh GLX-4CK-3',
            'description'=> 'Mẫu cửa thép vân gỗ 4 cánh GLX-4CK-3 là một mẫu sản phẩm của thương hiệu nổi tiếng GALAXY. Dòng sản phẩm này ra đời dựa trên việc tìm hiểu tâm lý và mong muốn của khách hàng về loại sản phẩm cửa vừa đáp ứng được tiêu chí an toàn cho người và tài sản, vừa đáp ứng được nhu cầu về tính thẩm mỹ, độ bền đẹp của cửa.',
            'img'=> '',
            'price'=>'0',
            'product_type_id'=>4,
            'status' => 1
        ]);
        // Điện nước
        DB::table('products')->insert([
            'name' => 'Dây Điện Đơn Cadivi CV 6.0 mm2',
            'description'=> 'Dây điện đơn Cadivi CV 6.0 mm2 là một trong số nhiều sản phẩm chất lượng mà Công ty Cổ phần dây cáp điện Việt Nam Cadivi cung cấp đến thị trường. Dòng sản phẩm này sử dụng đồng tinh khiết làm lõi và PVC làm vỏ ngoài nhằm nâng cao khả năng truyền dẫn.',
            'img'=> '',
            'price'=>'0',
            'product_type_id'=>5,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Ống HDPE',
            'description'=> 'Ống HDPE (hay polyethylene high-density) là loại ống được sản xuất bằng nhựa polyethylene lọc từ dầu thô sau đó trùng phân qua các xúc tác như crom, silic catalyst,… để tạo ra một loại polyethylene có tỉ trọng cao, độ bền kéo cao hơn so với nhựa LDPE hay PVC. Ống nhựa HDPE được ứng dụng trong các hệ thống cấp thoát nước, hệ thống đường ống khí đốt,... ',
            'img'=> '',
            'price'=>'0',
            'product_type_id'=>5,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Công Tắc Panasonic đảo chiều',
            'description'=> 'Công tắc đảo chiều panasonic dòng Wide series,hay được gọi là công tắc hai chiều, hoặc công tắc C. Loại công tắc Panasonic đảo chiều này được sử dụng nhiều ở cầu thang, khu vực hành lang dài, có thể điều khiển từ hai điểm khác nhau.
            Kết cấu đấu nối vít âm, điểm đấu nối âm trong lõi đúc, tiếp điểm chất lượng cao, nhựa chống cháy chịu được nhiệt độ cao đảm bảo an toan, không gây rò điện, không gây cháy nổ.',
            'img'=> '',
            'price'=>'0',
            'product_type_id'=>5,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Chậu rửa bát 1 hố mầu ghi xám BRODA kèm vòi thác tiện dụng kích thước lớn 78x46cm',
            'description'=> 'Chậu rửa bát 1 hố trên thị trường có nhiều loại giá rẻ, hình thức giống nhau nhưng do chất liệu, phụ kiện đi kèm và trình độ gia công xử lý bề mặt khác nhau nên giá cả có sự chênh lệnh rất lớn.',
            'img'=> '',
            'price'=>'3150000',
            'product_type_id'=>5,
            'status' => 1
        ]);
        // Nội Thất
        //Đệm và nệm
        DB::table('products')->insert([
            'name' => 'Nệm lò xo túi Tatana Hana Cool Plus',
            'description'=> 'Nệm lò xo túi Tatana Hana Cool Plus được sử dụng nguyên vật liệu thép cao cấp, đảm bảo hàm lượng carbon cao và những yêu cầu khắt khe nhất về mặt chất lượng theo tiêu chuẩn quốc tế. Hệ thống khung lò xo có khả năng nâng đỡ trọn vẹn và tối ưu từng bộ phận cơ thể mang đến lợi ích tuyệt vời cho sức khỏe và giấc ngủ ngon. Sử dụng nệm dài lâu giúp cải thiện rõ rệt chứng đau lưng, đau cổ và vai gáy hiệu quả.',
            'img'=> '',
            'price'=> '7749000',
            'product_type_id'=>6,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Nệm Lò Xo Perfect Vạn Thành',
            'description'=> 'Nệm lò xo Perfect Vạn Thành có hệ thống khung lò xo được xử lý ở nhiệt độ cao trên 240OC, nhằm tạo sự đồng nhất về độ cứng cho toàn kết cấu khung nệm và tăng khả năng chống xẹp lún trong suốt quá trình sử dụng.
            Với thành phần kết cấu được lựa chọn từ các loại nguyên vật liệu an toàn và bố trí khoa học, đảm bảo sự nâng đỡ tuyệt vời cho cơ thể và tăng sự thư giãn tối đa cho bạn.
            Nệm lò xo Vạn Thành giúp nâng đỡ và phân bổ một cách hợp lý trọng lượng cơ thể, chăm sóc tốt cho hệ thống xương lưng và cột sống của bạn.
            Họa tiết hoa văn tinh tế được dệt thêu sắc sảo trên bề mặt, làm tăng thêm vẻ đẹp lộng lẫy và hấp dẫn cho không gian phòng ngủ.',
            'price'=>'3562000',
            'img'=> '',
            'product_type_id'=>6,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Nệm cao su em bé Liên Á Bambino',
            'description'=> 'BAMBINO là dòng sản phẩm được thiết kế dành riêng cho bé. Lớp cao su thiên nhiên tạo cảm giác êm ái ru trọn giấc ngủ của bé, định hình đốt sống giữ thẳng. Sản phẩm như một món quà đặc biệt dành tặng các bậc cha mẹ đang kiếm tìm giải pháp hoàn hảo cho giấc ngủ của thiên thần nhỏ.',
            'img'=> '',
            'price'=>'3562000',
            'product_type_id'=>6,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Đệm lò xo Spine O Master Dunlopillo',
            'description'=> 'Đệm lò xo Spine O Master Dunlopillo được thiết kế đặc biệt để bảo vệ lưng của bạn ở mọi tư thế khi bạn nghỉ ngơi. Với sự kết hợp giữa lò xo chất lượng cao và vật liệu chất lượng, nó mang lại cảm giác sảng khoái nhất mỗi khi bạn thức dậy vào mỗi buổi sáng.',
            'img'=> '',
            'price'=>'8410000',
            'product_type_id'=>6,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Đệm lò xo Hanvico túi 3 viền Indiana',
            'description'=> 'Đệm lò xo Hanvico túi 3 viền Indianna là dòng đệm lò xo cao cấp có hệ thống lò xo túi độc lập. Vỏ bọc ngoài bằng chất liệu gấm cao cấp nhập khẩu có khả năng chống cháy, giúp nâng cao độ bền và tạo sự sang trọng cho sản phẩm cũng như tăng tính thẩm mỹ chung của căn phòng.',
            'img'=> '',
            'price'=>'6944000',
            'product_type_id'=>6,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Đệm lò xo Dunlopillo túi độc lập Royal Kensington',
            'description'=> 'Đệm lò xo Dunlopillo túi độc lập Royal Kensington là sự lựa chọn lý tưởng cho những người đang tìm kiếm sự sang trọng và chăm sóc tỉ mỉ đến từng chi tiết. Sản phẩm này tự hào kết hợp các nguyên liệu cao cấp để mang đến một trải nghiệm thoải mái đặc biệt. Được thiết kế như một tác phẩm hoàn hảo, đệm Kensington là biểu tượng của sự sang trọng trong dòng đệm lò xo cao cấp.',
            'img'=> '',
            'price'=>'50613000',
            'product_type_id'=>6,
            'status' => 1
        ]);
        //Bàn ghế
        DB::table('products')->insert([
            'name' => 'Bàn Ghế Gỗ Salon Hương Đá Chạm Đào Tay',
            'description'=> 'Đối với người Việt, gia đình luôn là nơi để trở về, nơi mang đến niềm vui và hy vọng cho mọi người giữa những vất vả của cuộc sống. Còn gì hạnh phúc hơn khi các thành viên được quây quần cạnh nhau trong một không gian ấm cúng, kể nhau nghe những điều thú vị và cùng vui vẻ tận hưởng những phút giây giải trí. Mẫu bàn ghế gỗ salon được thiết kế theo phong cách châu Á cổ điển sẽ đem lại một không gian phòng khách tuyệt vời để bạn và người thân cũng nhau truyện trò và chia sẻ những điều khó khăn trong cuộc sống của mình. Tìm hiểu về sản phẩm độc đáo này ngay sau đây nhé. ',
            'img'=> '',
            'price'=>'40000000',
            'product_type_id'=>7,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Bàn Làm Việc Tích Hợp Kệ Sách Tiện Lợi Gỗ MDF Chống Ẩm Màu Sồi',
            'description'=> 'Bàn làm việc văn phòng đẹp giá rẻ tích hợp kệ sách là mẫu nội thất đa công năng dùng tại nhà và phòng làm việc. Sản phẩm gồm nhiều tầng kệ cao với các hộc thông minh thuận tiện cho việc để hồ sơ, sách vở, giấy tờ, đồ trang trí… Mặt bàn được đục các lỗ thông minh để người dùng đi dây điện cho PC, đèn bàn, máy in… gọn gàng, ngăn nắp & an toàn hơn. ',
            'img'=> '',
            'price'=>'7400000',
            'product_type_id'=>7,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Bàn Họp Chân Sắt Mặt Gỗ Tự Nhiên',
            'description'=> 'Bàn họp chân sắt mặt gỗ tự nhiên được làm bằng chất liệu sắt phun sơn tĩnh điện với mặt gỗ ghép thanh. Trên mặt bàn được phủ một lớp sơn PU chống trầy xước tốt, ẩm mốc, bóng đẹp theo thời gian. Với chiếc mặt bàn hình chữ nhật vuông vắn, nổi bật mang lại không gian sang trọng cho văn phòng của bạn.',
            'img'=> '',
            'price'=>'3600000',
            'product_type_id'=>7,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Ghế Ăn Nệm Nhập Khẩu Sang Trọng-Mã: 2121',
            'description'=> 'Trong các vật dụng nội thất, ghế ăn luôn là sản phẩm được khách hàng lựa chọn một cách kỹ càng, cẩn thận nhất. Do bữa cơm gia đình vốn có vai trò quan trọng nên việc lựa chọn bàn ghế ăn cũng theo đó mà có yêu cầu cao hơn. Nếu bạn vẫn chưa tìm được cho mình một sản phẩm ưng ý, hãy tham khảo chiếc ghế ăn nệm nhập khẩu sau của nội thất Thiên Hòa.',
            'img'=> '',
            'price'=>'1400000',
            'product_type_id'=>7,
            'status' => 1
        ]);
        //tủ và kệ
        DB::table('products')->insert([
            'name' => 'Tủ Tài Liệu, Hồ Sơ Văn Phòng Màu 426',
            'description'=> 'Tủ tài liệu, hồ sơ văn phòng màu 426 thường được sử dụng để đồ cá nhân, hồ sơ, tài liệu tại văn phòng lãnh đạo. Tủ được thiết kế với gỗ MDF/MFC, mặt phủ Melamin, chống trầy xước. Thiết kế với nhiều buồng, tủ có tay nắm kéo và ổ khóa, các ngăn để tài liệu riêng, phù hợp với phòng để nhiều tài liệu. Tủ tài liệu thiết kế sang trọng và hiện đại, vô cùng tiện dụng.',
            'img'=> '',
            'price'=>'3100000',
            'product_type_id'=>8,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Hộc Tủ Ngăn Kéo Và Cánh Bánh Xe',
            'description'=> 'Hộc tủ ngăn kéo và cánh bánh xegiúp cho các đơn vị có thể sắp xếp và cất trữ tài liệu của công ty thì hộc tủ di động cũng là một vật dụng rất quen thuộc. Hiện nay trên thị trường có rất nhiều mẫu tủ phụ với kiểu dáng đa dạng.',
            'img'=> '',
            'price'=>'720000',
            'product_type_id'=>8,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Tủ Bếp Gỗ Sồi Nga 01',
            'description'=> 'Tủ bếp gỗ sồi Nga đang được rất nhiều người ưa chuộng trong thời gian gần đây. Bởi gỗ sồi không chỉ bền đẹp mà còn có tính thẩm mỹ cao.',
            'img'=> '',
            'price'=>'4200000',
            'product_type_id'=>8,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Kệ Trang Trí KTT03',
            'description'=> 'Kệ trang trí KTT03 thiết kế độc đáo, ấn tượng có thể sử dụng để trưng bày vật dụng, sách báo, đồ trang trí cho phòng làm việc trở nên chuyên nghiệp hơn. Sản phẩm được nhập khẩu và phân phối chính hãng bởi Thiên Hòa Furniture chất lượng hàng đầu, uy tín đảm bảo.',
            'img'=> '',
            'price'=>'2720000',
            'product_type_id'=>8,
            'status' => 1
        ]);
        //Đèn
        DB::table('products')->insert([
            'name' => 'Đèn cổ điển, khung gỗ, mặt mika nghệ thuật OCD-047',
            'description'=> 'Đèn ốp phong cách cổ điển không thể thiếu trong quá trình hoàn thiện những công trình như nhà phố, căn hộ, nhà hàng, quán café, công trình đền-chùa, nhà thờ, tôn giáo…. Với đa dạng mẫu mã, thiết kế, kích thước  và nhiều mức giá từ cao cấp – bình dân và giá rẻ, Violighting  tự tin đem đến cho quý khách hàng, đối tác một địa chỉ để tham khảo, tìm kiếm những sản phẩm đèn ốp trần cổ điển phù hợp với công trình.',
            'img'=> '',
            'price'=>'2000000',
            'product_type_id'=>9,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Đèn tường Led hiện đại ngoài trời kiểu trụ VNT-365',
            'description'=> 'Đèn tường VNT365, chất liệu Kim loại sơn tĩnh điện+khối mika trong cao cấp, tạo hình thiết kế, được sản xuất theo tiêu chuẩn IP65, có khả năng chống nước mưa, các điều kiện khí hậu ngoài trời tốt. Sản phẩm sử dụng chip COB 3000K,công suất 2*9wat, nguồn đúc chống nước, chống sét, cung cấp ánh sáng tốt, độ bền cao, rất tốt trong việc chiếu sáng, trang trí khu vực mặt tiền, ban công, sân vườn, hàng rào, hành lang…',
            'img'=> '',
            'price'=>'400000',
            'product_type_id'=>9,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Đèn chùm phòng khách-bàn ăn, chao vải, phong cách vintage DC-2020',
            'description'=> 'Đèn chùm phòng khách luôn là một trong những vấn đề quan tâm hàng đầu của mỗi công trình. Mẫu đèn trang trí gắn trần phòng khách-bàn ăn, chao vải, phong cách vintage DC-2020 với thiết kế đơn giản, hiện đại, tiện nghi, cùng độ bền cao sẽ là một sự lựa chọn mua sắm, tham khảo rất tốt đối với quý Khách hàng. Sản phẩm với chất liệu hợp kim+chao vải, sử dụng bóng E14 30000K được sử dụng rất nhiều trong trang trí phòng khách, bàn ăn,  showroom, shop, sảnh lễ tân, văn phòng… vừa đảm bảo ánh sáng tốt, và làm không gian trở nên mới lạ, thu hút hơn…',
            'img'=> '',
            'price'=>'4000000',
            'product_type_id'=>9,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Đèn thả Decor – Thiết kế hiện đại thủy tinh hình lông vũ TDC-2281',
            'description'=> 'Đèn thả Decor , là hạng mục khá quan trọng với mỗi công trình. Đèn thả Decor – Thiết kế hiện đại thủy tinh hình lông vũ TDC-2281 với chất liệu Thủy tinh, dễ dàng trong việc lắp đặt, đảm bảo được ánh sáng, trang trí cho mọi công trình. Giúp giải quyết rất tốt trong việc tìm kiếm đèn trang trí decor phòng khách, phòng bếp, phòng ngủ, trang trí quán cafe, trang trí cho shop, trang trí văn phòng….',
            'img'=> '',
            'price'=>'500000',
            'product_type_id'=>9,
            'status' => 1
        ]);
        //trang trí
        DB::table('products')->insert([
            'name' => 'Tranh Phù Điêu 3D Cao Cấp M02',
            'description'=> 'Tranh treo tường phù điêu 3d cao cấp. Mẫu tranh phù điêu phù hợp treo phòng khách, phòng ngủ với không gian hiện đại. Tranh treo tường được nhập khẩu 100% thiết kế tinh xảo công nghệ 3d hiện đại',
            'img'=> '',
            'price'=>'2500000',
            'product_type_id'=>10,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Tranh treo tường mã đáo thành công M1',
            'description'=> 'Tranh treo tường mã đáo thành công M1- Tranh Treo Tường Hiện Đại Giá Rẻ - 1000 mẫu tranh: Tranh phòng khách, tranh phòng ngủ, tranh nhà bếp, tranh dán tường 3D - ĐẸP - SANG TRỌNG - GIÁ RẺ tại Hà Nội !',
            'img'=> '',
            'price'=>'1500000',
            'product_type_id'=>10,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Gương Nghệ Thuật Trang Trí Stella Mirror Navado',
            'description'=> 'Sản phẩm gương nghệ thuật trang trí Stella là tác phẩm gương nghệ thuật đại diện xu hướng đẳng cấp và thời thượng tại thị trường Châu Âu. Mang tới không gian cảm giác sang trọng, thời thượng, thể hiện sự đẳng cấp của gia chủ.',
            'img'=> '',
            'price'=>'1500000',
            'product_type_id'=>10,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Giá Rượu Vang Để Bàn (KR024) – Cá Chép May Mắn',
            'description'=> 'Giá rượu vang để bàn với hình ảnh con cá chép trong phong thủy là một biểu tượng của sự may mắn, thành công và thịnh vượng. Hình tượng con cá chép đã đi vào rất nhiều trong các tác phẩm thơ ca, văn học, hội họa và đặc biệt là các các tác phẩm decor trang trí . Decor cá chép rất được các doanh nhân, nhà lãnh đạo yêu thích vì ý nghĩa đặc biệt của nó.',
            'img'=> '',
            'price'=>'1500000',
            'product_type_id'=>10,
            'status' => 1
        ]);
        //VLTT
        DB::table('products')->insert([
            'name' => 'Rèm cuốn văn phòng giá rẻ hãng Winsun mã RCW016',
            'description'=> 'Rèm cuốn có khả năng chống nắng và cách nhiệt rất tốt. Chất liệu rèm cửa sổ dạng cuốn bằng vải phủ nhựa nên có độ bền cao, hạn chế bám bụi và dễ vệ sinh.',
            'img'=> '',
            'price'=>'245000',
            'product_type_id'=>11,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Bộ chăn gối ESJ 24030 - TENCEL',
            'description'=> 'Bộ Everon ESJ-24030 thuộc bộ sưu tập 2024
            Chất liệu: 100% Tencel Jacquard (vải chất liệu Tencel dệt gấm hoa cao cấp)
            Mầu trắng tinh khiết với chất liệu mềm mại như những đám mây đang nhẹ nhàng, ôm ấp, vỗ về cho giấc ngủ của bạn.',
            'img'=> '',
            'price'=>'4500000',
            'product_type_id'=>11,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Thảm phòng khách | LIND | polyester | xám | hoạ tiết vuông | R200xD300cm',
            'description'=> 'Thảm trải sàn phòng khách đang được lựa chọn trang trí cho không gian nội thất như một xu hướng mới của các gia đình. Không chỉ tôn lên vẻ đẹp tổng thể, tạo điểm nhấn tinh tế, sản phẩm còn hạn chế sự trơn trượt, giảm thiểu âm thanh tiếng ồn và tạo nên cảm giác ấm cúng, sạch sẽ cho không gian',
            'img'=> '',
            'price'=>'0',
            'product_type_id'=>11,
            'status' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Thảm phòng khách | BIRK | polyester | màu tự nhiên | Ø200cm',
            'description'=> 'Thảm trải sàn phòng khách đang được lựa chọn trang trí cho không gian nội thất như một xu hướng mới của các gia đình. Không chỉ tôn lên vẻ đẹp tổng thể, tạo điểm nhấn tinh tế, sản phẩm còn hạn chế sự trơn trượt, giảm thiểu âm thanh tiếng ồn và tạo nên cảm giác ấm cúng, sạch sẽ cho không gian            ',
            'img'=> '',
            'price'=>'0',
            'product_type_id'=>11,
            'status' => 1
        ]);
    }
}
