<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Product_Type;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('product_types')->insert([
            'name' => 'Vật liệu xây dựng',
            'description'=> 'Gạch, gỗ, xi măng, bê tông, thép, gỗ nhựa composite, vật liệu cách âm và cách nhiệt.',
            'type' => 1,
            'status' => 1
        ]);
        DB::table('product_types')->insert([
            'name' => 'Vật liệu lót sàn',
            'description'=> 'Gạch, đá granite, đá marble, gỗ sàn, sàn nhựa PVC, sàn gỗ composite.',
            'type' => 1,
            'status' => 1
        ]);
        DB::table('product_types')->insert([
            'name' => 'Vật liệu trang trí ngoại thất',
            'description'=> 'Đá tự nhiên, gạch mosaic, gạch ốp lát, vật liệu láng gương, bê tông mài.',
            'type' => 1,
            'status' => 1
        ]);
        DB::table('product_types')->insert([
            'name' => 'Cửa và cửa sổ',
            'description'=> 'Cửa gỗ, cửa nhôm kính, cửa sắt, cửa chống cháy, cửa cuốn, cửa tự động.',
            'type' => 1,
            'status' => 1
        ]);
        DB::table('product_types')->insert([
            'name' => 'Hệ thống điện và nước',
            'description'=> 'Dây điện, ống nước, ổ cắm, công tắc, vòi sen, bồn tắm, bồn rửa, hệ thống xử lý nước.',
            'type' => 1,
            'status' => 1
        ]);
        DB::table('product_types')->insert([
            'name' => 'Nệm và đệm',
            'description'=> 'Nệm lò xo, nệm bông ép, nệm cao su, đệm sofa, đệm ghế.  ',
            'type' => 2,
            'status' => 1
        ]);
        DB::table('product_types')->insert([
            'name' => 'Bàn và ghế',
            'description'=> 'Bàn ăn, bàn làm việc, bàn trà, ghế ăn, ghế sofa, ghế băng.',
            'type' => 2,
            'status' => 1
        ]);
        DB::table('product_types')->insert([
            'name' => 'Tủ và kệ',
            'description'=> 'Tủ quần áo, tủ bếp, tủ trưng bày, kệ sách, kệ TV.',
            'type' => 2,
            'status' => 1
        ]);
        DB::table('product_types')->insert([
            'name' => 'Đèn và đèn trang trí',
            'description'=> 'Đèn trần, đèn bàn, đèn sàn, đèn chùm, đèn led, đèn nến.',
            'type' => 2,
            'status' => 1
        ]);
        DB::table('product_types')->insert([
            'name' => 'Trang trí',
            'description'=> 'Tranh treo tường, gương trang trí, đồ decor, tranh ảnh, đồ gốm sứ.',
            'type' => 2,
            'status' => 1
        ]);
        DB::table('product_types')->insert([
            'name' => 'Vật liệu trang trí',
            'description'=> 'Rèm cửa, gối tựa, tấm trang trí, thảm trải sàn, rèm cửa, bức tường 3D.',
            'type' => 2,
            'status' => 1
        ]);
    }
}
