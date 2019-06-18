<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            'title' => 'Under, nhà hàng dưới nước lớn nhất và độc đáo nhất thế giới tại Nauy',
            'content' => 'Quá trình thi công Under được mô tả như sau: Phần thô của nhà hàng được xây dựng trên một xà lan, các tấm kính cũng sẽ được gắn hoàn chỉnh trong lúc này. Sau khi xây xong nhà hàng sẽ được lai dắt bằng cần trục và tàu kéo đến vị trí có sẵn những trụ bê tông xây cố định bên dưới. Under sau đó sẽ bị nhần chím từ từ cho đến khi tiếp xúc với những trụ bê tông này và được bắt vít để cố định. Khi toàn bộ nhà hàng đã được gắn chắc chắn với các trụ bê tông thì họ bắt đầu bơm nước ra ngoài và tiến hành xây dựng nội thất.
            ',            
            'author' => 'Nguyễn Đức Hiếu',
            'short_decription' => 'Nhà hàng có tên là Under, do công ty tư vấn kiến trúc Snøhetta thiết kế. Công trình tọa lạc tại Lindesnes, điểm cực Nam của bờ biển Na Uy, nơi hợp lưu độc đáo phát triển cả hệ sinh thái nước lợ và nước mặn.'
        ]);        
    }
}
