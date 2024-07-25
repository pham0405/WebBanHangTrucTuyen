<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [   'id' => '1',
                'title'=>'CÁC BỆNH NGUY HIỂM MÀ CÁC BÉ CHÓ THƯỜNG GẶP PHẢI',
                'slug'=>'cac-benh-nguy-hiem-ma-cac-be-cho-thuong-gap',
                'content'=>'Chó là động vật vô cùng thân thiết quen thuộc đối với xã hội chúng ta. Mỗi gia đình hầu như đều có các bạn chó này làm lính gác, bầu bạn,… nhưng trong đời sống thường ngày có vô vàn các loại virut thâm nhập vào trong mỗi chú cún làm cho các bé chịu đựng sự đau đớn, mệt mỏi….Với mỗi người chủ đều muốn các bé cùn của mình luôn luôn khỏe mạnh, vui tươi. Vì vậy chúng ta hãy cùng tìm hiệu các bệnh mà các chú chó dễ mắc phải và biện pháp phòng chống những bệnh này nhé.',
                'author_id'=>'1',
                'date'=>toDay(),
                'image'=>'https://pethouse.com.vn/wp-content/uploads/2024/07/z5594202021755_e41b7c7b4010dfc97b4342d1cbc8bf5b-2-2048x1365.jpg',
                'category_id'=>'1',
                'created_at'=>Now(),'updated_at'=>Now()],
            [   'id' => '2',
                'title'=>'CÁC BỆNH NGUY HIỂM MÀ CÁC BÉ MÈO THƯỜNG GẶP PHẢI',
                'slug'=>'cac-benh-nguy-hiem-ma-cac-be-meo-thuong-gap',
                'content'=>'Trong cuộc sống xung quanh chúng ta tiềm ẩn những loại virut gây hại với những chú mèo, những virut này làm cho các bé mèo lanh lợi, hoạt bát, khỏe khoắn của chúng ta trở nên đau đớn, yếu ớt và có thể dẫn đến tử vong. Vậy làm cách nào để có thể ngăn được những loại virut nguy hiểm này? Qua bài viết này, mọi người hãy cùng Pethouse tìm hiểu từng loại virut gây bệnh cho mèo, nguyên nhân, biện pháp phòng tránh các loại virut này nhé!',
                'author_id'=>'1',
                'date'=>toDay(),
                'image'=>'https://pethouse.com.vn/wp-content/uploads/2024/07/z5594203881226_696f999470af3c0ba4a4384e51e0a8a6-1-1024x1536.jpg',
                'category_id'=>'1',
                'created_at'=>Now(),'updated_at'=>Now()],
            [   'id' => '3',
                'title'=>'Chó Chảy Dãi Nhiều Biểu Hiện Của Bệnh Gì ?',
                'slug'=>'cho-chay-dai-nhieu-bieu-hien-cua-benh-gi',
                'content'=>'Chó là một loài động vật có hệ tiêu hóa đặc biệt, và một trong những vấn đề phổ biến mà chủ nhân chó thường phải đối mặt là tình trạng chó chảy dãi. Dãi ở chó có thể do nhiều nguyên nhân khác nhau, từ vi khuẩn đến cảm giác căng thẳng, và để hiểu rõ hơn về vấn đề này, chúng ta cần phải khám phá sâu hơn vào hệ tiêu hóa của chó cũng như các yếu tố ngoại lai có thể gây ra tình trạng này. Cùng Pet House đi tìm hiểu nhé.',
                'author_id'=>'1',
                'date'=>toDay(),
                'image'=>'https://pethouse.com.vn/wp-content/uploads/2024/05/12f247e5-cho-bi-chay-dai-1.jpg',
                'category_id'=>'1',
                'created_at'=>Now(),'updated_at'=>Now()],
            [   'id'=> '4',
                'title'=>'Cần Chuẩn Bị Gì Trước Khi Nuôi Chó Golden ?',
                'slug'=>'can-chuan-bi-gi-khi-nuoi-cho-golden',
                'content'=>'Việc đón chó Golden về nhà là một trải nghiệm tuyệt vời, nhưng cũng đòi hỏi sự chuẩn bị và kiên nhẫn để chăm sóc và nuôi dưỡng chúng một cách đúng cách. Chó Golden Retriever là một trong những giống chó thông minh, trung thành và dễ dạy nhất, nhưng để chúng phát triển tốt, bạn cần cung cấp cho chúng một môi trường thoải mái, dinh dưỡng và tình yêu thương.Hôm nay Pet House sẽ hướng dẫn về cách nuôi chó Golden khi mới đón về nhà nha.',
                'author_id'=>'1',
                'date'=>toDay(),
                'image'=>'https://pethouse.com.vn/wp-content/uploads/2024/05/nguon-goc-cua-cho-golden.webp',
                'category_id'=>'2',
                'created_at'=>Now(),'updated_at'=>Now()],
            [   'id'=> '5',
                'title'=>'Cơ Thể Linh Hoạt Của Mèo – Ẩn Dấu Sự Thật Đằng Sau Bí Ẩn ?',
                'slug'=>'bi-an-cua-co-the-meo',
                'content'=>'Tự nhiên, linh hoạt và nhanh nhẹn, cơ thể của mèo là một kỳ phùng địch thủ đáng ngưỡng mộ. Tính linh hoạt của chúng là kết quả của một loạt các điều kiện sinh học độc đáo và một số yếu tố tiến hóa. Để hiểu rõ hơn về điều này, chúng ta cần xem xét cấu trúc cơ thể của mèo cùng với các yếu tố sinh học và tiến hóa. Cùng Pet House đi tìm hiểu về sự thật thú vị này nhé.',
                'author_id'=>'1',
                'date'=>toDay(),
                'image'=>'https://pethouse.com.vn/wp-content/uploads/2024/05/tiep-dat.jpg',
                'category_id'=>'2',
                'created_at'=>Now(),'updated_at'=>Now()],
        ]);
    }
}
