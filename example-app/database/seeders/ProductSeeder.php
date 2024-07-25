<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>'ALASKA NÂU ĐỎ XINH ',
                'slug'=>'alaska-nau-do',
                'quantity'=>'1',
                'price'=>'420000',
                'category_id'=>'1',
                'description'=>'Chó Alaska nhập khẩu',
                'view'=>'1',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2024/07/photo_2024-07-10_18-14-08.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>2,
                'name'=>'POODLE VÀNG MƠ',
                'slug'=>'poodle-vang',
                'quantity'=>'1',
                'price'=>'730000',
                'category_id'=>'1',
                'description'=>'Nhập khẩu từ Úc',
                'view'=>'616',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2024/07/photo_2024-07-10_20-33-30-2.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>3,
                'name'=>'POODLE KEM MƠ',
                'slug'=>'poodle-kem-mo',
                'quantity'=>'1',
                'price'=>'920000',
                'category_id'=>'1',
                'description'=>'Nhập khẩu từ Úc',
                'view'=>'726',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2024/07/photo_2024-07-13_14-50-06.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>4,
                'name'=>'HUSKY XÁM',
                'slug'=>'husky-xam',
                'quantity'=>'1',
                'price'=>'420000',
                'category_id'=>'1',
                'description'=>'Nhập Khẩu từ nước ngoài',
                'view'=>'116',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2024/07/photo_2024-07-12_15-25-08-2.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>5,
                'name'=>'EM PUG BÉO Ú NU',
                'slug'=>'pug',
                'quantity'=>'1',
                'price'=>'710000',
                'category_id'=>'1',
                'description'=>'Có nguồn gốc từ Đức',
                'view'=>'926',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2019/12/60634147_1302412309906850_288819598420082688_n.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>6,
                'name'=>'MÈO TAI CỤP',
                'slug'=>'meo-tai-cup',
                'quantity'=>'1',
                'price'=>'290000',
                'category_id'=>'2',
                'description'=>'Nằm giữa Anh và Ireland',
                'view'=>'926',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2020/06/105610015_1675245249290219_60632172541139721_o.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [   
                'id'=>7,
                'name'=>'MÈO GOLDEN TAI CỤP ĐỰC YÊU',
                'slug'=>'meo-golden',
                'quantity'=>'1',
                'price'=>'1900000',
                'category_id'=>'2',
                'description'=>' Có nguồn gốc từ giống mèo Anh Shorthair',
                'view'=>'1126',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2023/03/b0220a826132bb6ce223.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>8,
                'name'=>'MÈO CHÂN NGẮN TAI CỤP SIU YÊU',
                'slug'=>'meo-chan-ngan',
                'quantity'=>'1',
                'price'=>'3500000',
                'category_id'=>'2',
                'description'=>'Có nguồn gốc từ Mỹ và được biết đến với thân hình nhỏ nhắn và chân ngắn',
                'view'=>'816',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2023/05/photo_2023-05-30_16-15-09.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>9,
                'name'=>'EM MÈO XÁM TAI CỤP CƯNG CƯNG ',
                'slug'=>'meo-xam',
                'quantity'=>'1',
                'price'=>'2450000',
                'category_id'=>'2',
                'description'=>'Có nhiều sắc thái xám, từ xám sáng đến xám đậm.',
                'view'=>'1026',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2023/03/e3940fa767c9bb97e2d8-e1680160884611.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>10,
                'name'=>'MÈO CHÂN NGẮN TAI CỤP',
                'slug'=>'meo-chan-ngan-tai-cup',
                'quantity'=>'1',
                'price'=>'2920000',
                'category_id'=>'2',
                'description'=>'Có nguồn gốc từ Mỹ và được biết đến với thân hình nhỏ nhắn và chân ngắn',
                'view'=>'816',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2023/05/photo_2023-05-30_16-15-09.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>11,
                'name'=>'SỮA BIO MILK (SỮA BỘT GÓI) ',
                'slug'=>'sua-bio-milk',
                'quantity'=>'1',
                'price'=>'3400000',
                'category_id'=>'3',
                'description'=>'Cung cấp dinh dưỡng bổ sung cho chó, đặc biệt là cho những chú chó con hoặc chó mẹ đang cho con bú',
                'view'=>'816',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2021/03/kiotviet_203cfaa6116235ce080d0b4d1c6ae078.jpeg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>12,
                'name'=>'SỮA PRECATEN CHO MÈO',
                'slug'=>'sua-precaten',
                'quantity'=>'1',
                'price'=>'175000',
                'category_id'=>'3',
                'description'=>'Cung cấp dinh dưỡng bổ sung mèo khi còn nhỏ ',
                'view'=>'816',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2022/08/1b69909a1fd6da8883c7.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>13,
                'name'=>'ZESTY PAWS WILD ALASKAN SANL',
                'slug'=>'zesty',
                'quantity'=>'1',
                'price'=>'192000',
                'category_id'=>'3',
                'description'=>' cung cấp nhiều lợi ích cho sức khỏe của chó, đặc biệt là liên quan đến sức khỏe da và lông',
                'view'=>'816',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2023/02/93a64c1025feffa0a6ef-e1677125403893.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>14,
                'name'=>'XƯƠNG CUỐN THỊT GÀ',
                'slug'=>'xuong-cuon-thit-ga',
                'quantity'=>'1',
                'price'=>'300000',
                'category_id'=>'3',
                'description'=>'Thực phẩm cho chó và mèo',
                'view'=>'816',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2022/08/0a9bfbca835841061849.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>15,
                'name'=>'SÚP THƯỞNG CIAO',
                'slug'=>'sup-thuong',
                'quantity'=>'1',
                'price'=>'230000',
                'category_id'=>'3',
                'description'=>'Giúp tăng sức ăn cho chó và mèo',
                'view'=>'816',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2022/08/8d0d0092931b5145080a.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>16,
                'name'=>'SIRO TRỊ CHẢY NƯỚC MẮT',
                'slug'=>'siro-tri-chay-nuoc-mat',
                'quantity'=>'1',
                'price'=>'230000',
                'category_id'=>'4',
                'description'=>'Giúp thú cưng không chảy nước mắt hiệu quả cao',
                'view'=>'816',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2022/08/c09e39d6aa5f6801314e.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>17,
                'name'=>'LƯỢC GỠ RỐI THÚ CƯNG',
                'slug'=>'luoc',
                'quantity'=>'1',
                'price'=>'120000',
                'category_id'=>'4',
                'description'=>'vệ sinh lông thú cưng',
                'view'=>'816',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2022/08/6830314265b5a0ebf9a4.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>18,
                'name'=>'GIƯỜNG KUTE CHO BOSS',
                'slug'=>'giuong-kute',
                'quantity'=>'1','price'=>'150000',
                'category_id'=>'4',
                'description'=>'Giúp vật nuôi giấc ngủ say',
                'view'=>'816',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2023/02/172f59bc7e88a4d6fd99-e1676696314661.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>19,
                'name'=>'BÁT CHỐNG ĂN NHANH',
                'slug'=>'bat-chong-an-nhanh',
                'quantity'=>'1',
                'price'=>'195000',
                'category_id'=>'4',
                'description'=>'Giúp chó và tăng sức ăn nhanh',
                'view'=>'816',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2022/08/5c55ae1c3d95ffcba684.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>20,
                'name'=>'XỊT VỆ SINH ĐÚNG CHỖ',
                'slug'=>'xit-ve-sinh',
                'quantity'=>'1',
                'price'=>'200000',
                'category_id'=>'4',
                'description'=>'Khử mùi và làm sạch ',
                'view'=>'816',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2021/05/kiotviet_0940466be9c1ca03485eaaaf66e3506b.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ]
        ]);
    }
}
