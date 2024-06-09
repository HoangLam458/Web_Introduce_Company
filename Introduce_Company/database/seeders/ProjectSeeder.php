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
            'name' => 'Lắp đặt & thi công bảng hiệu cho các thương hiệu hàng đầu',
            'description'=> 'Dự án này tập trung vào việc thiết kế, lắp đặt và thi công bảng hiệu cho các thương hiệu hàng đầu như THP Group, Kangaroo, 3M, Warrior, Eneos, Carlsberg, Sơn Hà, Nutifood, Dutch Lady và SaigonMall. Với mục tiêu nâng cao nhận diện thương hiệu và thu hút sự chú ý của khách hàng, chúng tôi cam kết cung cấp các giải pháp bảng hiệu chất lượng cao, sáng tạo và bền vững. Bằng cách sử dụng các vật liệu hiện đại và kỹ thuật tiên tiến, chúng tôi đảm bảo rằng mỗi bảng hiệu không chỉ đẹp mắt mà còn đáp ứng các tiêu chuẩn an toàn và hiệu quả trong truyền thông thương hiệu.',
            'status' => 1,
            'image' => 'img/project/banghieu.jpg',
        ]);
        DB::table('projects')->insert([
            'name' => 'Trang trí ngoại thất - nội thất',
            'description'=> 'Dự án trang trí nội – ngoại thất của công ty xây dựng - thiết kế - nội thất TMC tập trung vào việc cải thiện và nâng cao không gian sống, làm việc và giải trí cho khách hàng. Với sự kết hợp hài hòa giữa yếu tố thẩm mỹ và công năng, dự án này mang đến những giải pháp trang trí độc đáo, hiện đại và phù hợp với nhu cầu cá nhân hóa của từng khách hàng. Công ty TMC cam kết sử dụng các vật liệu chất lượng cao, cùng đội ngũ thiết kế và thi công chuyên nghiệp, để đảm bảo mỗi công trình đều đạt tiêu chuẩn cao về cả hình thức lẫn chất lượng.',
            'status' => 1,
            'image' => 'img/project/trangtri.jpg',
        ]);
        DB::table('projects')->insert([
            'name' => 'Trang trí theo mùa',
            'description'=> '
            Dự án trang trí theo mùa của công ty xây dựng - thiết kế - nội thất TMC tập trung vào việc tạo ra các không gian sống và làm việc đẹp mắt, phù hợp với từng mùa trong năm. Mục tiêu là mang lại sự mới mẻ và hài hòa cho không gian, đồng thời tạo ra môi trường thoải mái và thu hút cho khách hàng.',
            'status' => 1,
            'image' => 'img/project/theomua.jpg',
        ]);
        DB::table('projects')->insert([
            'name' => 'Pano – Billboard – Bus',
            'description'=> 'Dự án Pano – Billboard – Bus của công ty xây dựng, thiết kế, và nội thất TMC là một phần trong chiến lược quảng bá thương hiệu và dịch vụ của công ty. Dự án bao gồm việc thiết kế và triển khai các bảng quảng cáo (pano, billboard) và quảng cáo trên xe buýt (bus) để tăng cường nhận diện thương hiệu và tiếp cận khách hàng mục tiêu. Mục tiêu chính của dự án là tận dụng các phương tiện truyền thông ngoài trời để truyền tải thông điệp về các dịch vụ và sản phẩm của công ty TMC, từ đó thu hút sự chú ý và tạo dựng lòng tin từ khách hàng tiềm năng.',
            'status' => 1,
            'image' => 'img/project/pano.jpg',
        ]);

        DB::table('projects')->insert([
            'name' => 'Tổ chức Event và cho thuê mặt bằng',
            'description'=> 'Dự án tổ chức event và cho thuê mặt bằng của công ty xây dựng - thiết kế - nội thất TMC tập trung vào việc cung cấp không gian đa chức năng và dịch vụ toàn diện cho các sự kiện. Công ty TMC không chỉ xây dựng và thiết kế các mặt bằng chất lượng cao mà còn cung cấp dịch vụ tổ chức sự kiện chuyên nghiệp.',
            'status' => 1,
            'image' => 'img/project/event.jpg',
        ]);



    }
}
