<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    public function definition(): array
    {   
        $array=[
            "Trò chơi là một hình thức có cấu trúc của việc chơi đùa, thường thực hiện nhằm mục đích giải trí hay vui vẻ, và đôi khi được sử dụng như một công cụ giáo dục.[1] Trò chơi khác biệt với công việc, thường thực hiện để nhận thù lao, và nghệ thuật, hay biểu hiện của các yếu tố thẩm mỹ hoặc tư tưởng. Tuy nhiên, sự phân biệt này là không rõ ràng và nhiều trò chơi cũng được coi là công việc (chẳng hạn như người chơi thể thao chuyên nghiệp hoặc trò chơi có khán giả) hoặc nghệ thuật (chẳng hạn như trò chơi ghép hình hoặc trò chơi có bố cục nghệ thuật như mạt chược, solitaire, hoặc một số trò chơi điện tử).
            Các trò chơi đôi khi được chơi hoàn toàn để thưởng thức, đôi khi để đạt được thành tích hoặc phần thưởng. Chúng có thể được chơi một mình, theo nhóm hoặc trực tuyến; với những người chơi nghiệp dư hoặc chuyên nghiệp. Những người chơi có thể có khán giả là những người không phải người chơi, chẳng hạn như khi mọi người giải trí bằng cách xem giải vô địch cờ vua. Mặt khác, người chơi trong một trò chơi có thể trở thành khán giả của riêng họ khi đến lượt chơi của họ. Thông thường, một phần giải trí cho trẻ em khi chơi trò chơi là quyết định xem ai là khán giả và ai là người chơi.",
            'Nhà thiết kế trò chơi Chris Crawford đã định nghĩa thuật ngữ này trong ngữ cảnh của máy tính.[8] sử dụng một loạt các phép phân chia có/không:

                Sự thể hiện sáng tạo là nghệ thuật nếu được tạo ra vì vẻ đẹp riêng của nó và giải trí nếu được tạo ra vì tiền.
                Một tác phẩm giải trí là một món đồ chơi nếu nó có tính tương tác. Phim và sách được trích dẫn như những ví dụ về giải trí không tương tác.
                Nếu không có mục tiêu nào liên quan đến vật để chơi, thì đó là đồ chơi. (Crawford lưu ý rằng theo định nghĩa của mình, (a) một món đồ chơi có thể trở thành một yếu tố trò chơi nếu người chơi đưa ra các quy tắc, và (b) The Sims và SimCity là đồ chơi, không phải trò chơi.) Nếu nó có mục tiêu, một món đồ chơi là một thách thức.
                Nếu một thử thách không có "tác nhân tích cực chống lại người mà bạn cạnh tranh", thì đó là một câu đố; nếu có một, đó là một xung đột. (Crawford thừa nhận rằng đây là một bài kiểm tra chủ quan. Trò chơi điện tử với trí tuệ nhân tạo thuật toán đáng chú ý có thể được chơi như câu đố; chúng bao gồm các mô hình được sử dụng để tránh ma trong Pac-Man.)
                Cuối cùng, nếu người chơi chỉ có thể vượt trội hơn đối thủ, nhưng không tấn công họ để can thiệp vào hoạt động của họ, xung đột là một cuộc cạnh tranh. (Các cuộc thi bao gồm đua xe và trượt băng nghệ thuật. ) Tuy nhiên, nếu các cuộc tấn công được cho phép, thì cuộc xung đột được coi là một trò chơi.
                Do đó, định nghĩa của Crawford có thể hiển thị là[nghiên cứu chưa công bố?]: một hoạt động tương tác, hướng đến mục tiêu, thực hiện để kiếm tiền, với các tác nhân tích cực để chơi với nhau, trong đó người chơi (bao gồm các tác nhân tích cực) có thể can thiệp lẫn nhau.
                
                Tuy nhiên, các định nghĩa khác cũng như lịch sử cho thấy rằng giải trí và trò chơi không nhất thiết phải được thực hiện để thu lợi nhuận.',
        ];
        return [
            "name" => fake()->name(),
            "short_decription" => $array[random_int(0,1)],
            "active" => random_int(0,1),
            "actived_updated_at" => fake()->dateTime(),
            "shop_profile_id" => random_int(1,100),
            "background_id" => random_int(1,100),
            "product_sale" => random_int(0,1000),
            "number_product" => random_int(0,1000),
            "category_id" => random_int(10,110),
        ];
    }
}
