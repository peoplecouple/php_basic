<footer class="Footer">
  <div class="container">
    <div class="logo"> <img src="./img/logo02.png" alt="<?= $company ?>"> </div>
    <address>
      <ul>
        <li>주소 : <?= $c_address ?></li>
        <li>대표 : <?= $c_ceo ?></li>
        <li>사업자 등록번호 : <?= $c_num ?></li>
        <li>전화 :
          <a href="tel:<?= $tel ?>"><?= $tel ?></a>
        </li>
        <li>이메일 :
          <a href="mailto:<?= $email ?>"><?= $email ?></a>
        </li>
      </ul>
      <div class="copyright">
        &copy; <?= $company ?>all rights reserved.
      </div>

    </address>
  </div>
</footer>
</div>

<script src="./js/jquery-1.12.4.min.js"></script>
<script src="./js/slick.min.js"></script>
<script src="./js/main.js"></script>
<script>
  var pageNum = <?= $subnum ?>;
  $('.Lnb li').eq(pageNum - 1).addClass('on')
</script>
</body>

</html>