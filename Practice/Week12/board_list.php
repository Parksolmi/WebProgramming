<section>
  <div id="main_img_bar">
    <img src="./main_img.png">
  </div>
  <div id="bord_box">
    <h3>
      게시판 > 목록 보기
    </h3>
    <ul id="borad_list">
      <li>
        <span class="col1">번호</span>
        <span class="col2">제목</span>
        <span class="col3">글쓴이</span>
        <span class="col4">첨부</span>
        <span class="col5">등록일</span>
        <span class="col6">조회</span>
      </li>

      <?php
        if (isset($_GET["page"]))
          $page = $_GET["page"];
        else
          $page = 1;
        
        $con = mysqli("locathost", "user1", "12345", "sample");
        $sql = "select * from board order by num desc";
        $result = mysqli_query($con, $sql);
        $total_record = mysqli_num_rows($result);

        $scale = 10;

        if($total_record % $scale == 0) {
          $total_page = floor($total_record/$scale);
        }
        else {
          $total_page = floor($total_record/$scale) + 1;
        }

        $start = ($page - 1) * $scale;

        




      ?>
    </ul>