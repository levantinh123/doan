<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(array(
            array(
                'title'=>'Lần đầu ĐH FPT cấp học bổng tiến sĩ',
                'description'=>'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.',
                'content'=>'Ngày 18/1, ĐH FPT công bố chương trình học bổng mang tên cố giáo sư Nguyễn Văn Đạo và học bổng tiến sỹ cho mùa tuyển sinh 2011.
                            Trong số 400 học sinh xuất sắc nhất ở 100 trường THPT hàng đầu cả nước được cấp học bổng Nguyễn Văn Đạo, ĐH FPT sẽ chọn ra 30 em giỏi nhất để cấp học bổng đào tạo bậc tiến sĩ chuyên ngành Khoa học máy tính, với thời gian đào tạo ở cả trong và ngoài nước.
                            Để được cấp học bổng này, thí sinh phải có thành tích học tập xuất sắc, đam mê ngành CNTT, và đặc biệt đam mê nghiên cứu khoa học. Ngoài ra, ĐH FPT tiếp tục dành nhiều suất học bổng toàn phần và bán phần cho các thí sinh đạt kết quả cao trong kỳ thi tuyển sinh của trường, cũng như thí sinh đạt thành tích trong các kỳ thi Olympic quốc gia và quốc tế.',
                'so_like'=>5,
                'img'=>'FPT-2.jpg',
                'user_id'=>1,
                'category_id'=>2
            ),
            array(
                'title'=>'Phương pháp Mathnasium giúp trẻ yêu thích môn toán',
                'description'=>'Phương pháp dạy toán Mathnasium với 5 kỹ thuật giảng dạy bổ sung nhau, giúp trẻ em tiếp thu kiến thức toán hiệu quả, không cảm thấy áp lực và nhàm chán.  ',
                'content'=>'Phương pháp dạy này được nghiên cứu và phát triển bởi ông Larry Martinek - giáo sư toán học xuất sắc của bang California, Mỹ. Trong trung hạn, Mathnasium giúp học sinh phát triển tư duy, nâng cao chỉ số thông minh, đồng thời xây dựng lòng tin vào chính bản thân mình. Mục tiêu lâu dài và cao nhất của nó là giúp từng cá nhân trở thành người tự tin, năng động và thành công trong cuộc sống. 
                           Trong 5 kỹ thuật giảng dạy, kỹ thuật tư duy giúp các em tập thói quen suy nghĩ, từ đó xây dựng sự nhạy bén và tự tin với các con số. Kỹ thuật diễn đạt bằng ngôn từ làm học sinh tập thói quen và kỹ năng diễn giải bằng lời những ý tưởng, suy luận của mình. Ngoài ra, kỹ thuật quan sát hình ảnh trực quan, sử dụng giáo cụ, thực hành toán viết cung cấp nguồn giáo trình và bài tập phong phú, đa dạng để trẻ có thể thực hành và phát triển kiến thức, tư duy và kỹ năng giải toán.
                           Giáo trình Mathnasium gồm 3 loại. Loại thứ nhất là các bài tập PK, là bài tập “theo đơn”. Đây là hệ thống các bài tập chuyên đề được phân cho từng học sinh dựa trên kết quả kiểm tra đầu kỳ của học sinh đó. Loại bài tập này giúp hoàn thiện những mặt còn hạn chế, và phát triển các mặt mạnh của từng em. Từ đó, phương pháp xây dựng nền tảng toán vững chắc cho trẻ. Loại thứ hai là bài tập Work Out Book - rèn luyện tư duy số. Đây là loại được thiết kế tổng hợp, với những khái niệm mở rộng, giúp học sinh phát triển “tư duy số”, từ đó phát triển trí tuệ tốt nhất. Loại thứ ba là Focus-on, chuyên sâu về những chủ đề nhất định hoặc củng cố các lỗ hổng và điểm còn hạn chế, nâng cao kiến thức theo chủ đề. ',
                'image'=>'img3770-874692-1369622671_500x0.jpg',
                'so_like'=>10,
                'user_id'=>1,
                'category_id'=>2
            ),
            array(
                'title'=>'Pháp phát hiện 31 di dân trong xe tải',
                'description'=>'31 người di cư Pakistan được phát hiện trong một chiếc xe tải ở miền nam nước Pháp hôm 1/11.',
                'content'=>'Chiếc xe tải chở hơn 30 di dân bị phát hiện trong một cuộc kiểm tra định kỳ trên đường cao tốc gần biên giới Italy hôm 1/11. Tài xế cũng đến từ Pakistan đã bị bắt. Trong số 31 di dân có ba thiếu niên, đã được bàn giao cho chính quyền Italy xử lý theo đúng thủ tục nhập cư.
                            "Chúng tôi sẽ nỗ lực truy tìm mạng lưới và những kẻ đứng sau vụ này, như chúng tôi vẫn làm khi xử lý các trường hợp tương tự", Văn phòng công tố thành phố Nice, đông nam Pháp cho hay.
                             Sự việc diễn ra không lâu sau khi cảnh sát hạt Essex, Anh phát hiện 39 người thiệt mạng trong một container đông lạnh. Cảnh sát Anh ngày 1/11 ra thông báo tin rằng các nạn nhân trong vụ 39 người chết trên xe container là công dân Việt Nam và đang xác định danh tính các nạn nhân này.',
                'image'=>'anh1-6120-1572716098.jpg',
                'so_like'=>10,
                'user_id'=>1,
                'category_id'=>7
            )     
          
        ));
    }
}
