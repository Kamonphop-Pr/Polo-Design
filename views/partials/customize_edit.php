
<script>
    var polo='images/polo/polo.png';
    var screen, screen1, canvas;
    var code_b,code_sco,code_bag,code_h,code_co; 
    screen = new fabric.Canvas('mainscreen');
       screen1 = new fabric.Canvas('mainscreen1');
        screen1.setHeight(560);
        screen1.setWidth(500);
        fabric.Image.fromURL('images/polo/polo_back_2.png', function (oImg) {
          oImg.width = 398;
          oImg.height = 460;
          oImg.set('selectable', false);
          screen1.add(oImg);
          screen1.centerObject(oImg);
          bg = screen1.item(0);
          bg.filters.length = 0;
          bg.filters.push(new fabric.Image.filters.Tint({
          color:  '<?php echo "#".$row['color_body'];?>',
          opacity: .63
          }));
          bg.applyFilters(screen1.renderAll.bind(screen1));
      });
      fabric.Image.fromURL('images/polo/collar_back_.png', function (oImg) {
          oImg.width = 398;
          oImg.height = 460;
          oImg.set('selectable', false);
          screen1.add(oImg);
          screen1.centerObject(oImg);
          bg = screen1.item(1);
          bg.filters.length = 0;
          bg.filters.push(new fabric.Image.filters.Tint({
          color: '<?php echo "#".$row['color_collar'];?>',
          opacity: .63
          }));
          bg.applyFilters(screen1.renderAll.bind(screen1));
      });
      screen.setHeight(560);
      screen.setWidth(500);
      fabric.Image.fromURL(polo, function (oImg) {
        oImg.width = 398;
        oImg.height = 460;
        oImg.set('selectable', false);
        screen.add(oImg);
        screen.centerObject(oImg);
        bg = screen.item(0);
        bg.filters.length = 0;
        bg.filters.push(new fabric.Image.filters.Tint({
          color: '<?php echo "#".$row['color_body'];?>',
          opacity: .63
        }));
        bg.applyFilters(screen.renderAll.bind(screen));
      });

      fabric.Image.fromURL('images/polo/thumb1.png', function (oImg) {
        oImg.width = 398;
        oImg.height = 460;
        oImg.set('selectable', false);
        screen.add(oImg);
        screen.centerObject(oImg);
        bg = screen.item(1);
        bg.filters.length = 0;
        bg.filters.push(new fabric.Image.filters.Tint({
          color: '<?php echo "#".$row['color_pocket'];?>',
          opacity: .63
        }));
        bg.applyFilters(screen.renderAll.bind(screen));
       });

       fabric.Image.fromURL('images/polo/Scollar.png', function (oImg) {
        oImg.width = 398;
        oImg.height = 460;
        oImg.set('selectable', false);
        screen.add(oImg);
        screen.centerObject(oImg);
        bg = screen.item(2);
        bg.filters.length = 0;
        bg.filters.push(new fabric.Image.filters.Tint({
          color: '<?php echo "#".$row['color_bag'];?>',
          opacity: .63
        }));
        bg.applyFilters(screen.renderAll.bind(screen));
       });

       fabric.Image.fromURL('images/polo/pp.png', function (oImg) {
        oImg.width = 398;
        oImg.height = 460;
        oImg.set('selectable', false);
        screen.add(oImg);
        screen.centerObject(oImg);
        bg = screen.item(3);
        bg.filters.length = 0;
        bg.filters.push(new fabric.Image.filters.Tint({
          color: '<?php echo "#".$row['color_sleeve'];?>',
          opacity: .63
        }));
        bg.applyFilters(screen.renderAll.bind(screen));
       });

       fabric.Image.fromURL('images/polo/collar_default.png', function (oImg) {
        oImg.width = 398;
        oImg.height = 460;
        oImg.set('selectable', false);
        screen.add(oImg);
        screen.centerObject(oImg);
        bg = screen.item(4);
        bg.filters.length = 0;
        bg.filters.push(new fabric.Image.filters.Tint({
          color: '<?php echo "#".$row['color_collar'];?>',
          opacity: .63
        }));
        bg.applyFilters(screen.renderAll.bind(screen));
       });
       
    $(document).ready(function () {
       
      // loop ใส่สีให้ กับ ปุ่มเลือกสีเสื้อ
      $.each($(".bgcolor span"), function () {
        var className = $(this).attr('class');
        $(".bgcolor ." + className).css("background", className);
      });
      $.each($(".bgcolor1 span"), function () {
        var className = $(this).attr('class');
        $(".bgcolor1 ." + className).css("background", className);
      });
      $.each($(".bgcolor2 span"), function () {
        var className = $(this).attr('class');
        $(".bgcolor2 ." + className).css("background", className);
      });

      $.each($(".bgcolor3 span"), function () {
        var className = $(this).attr('class');
        $(".bgcolor3 ." + className).css("background", className);
      });

      $.each($(".bgcolor4 span"), function () {
        var className = $(this).attr('class');
        $(".bgcolor4 ." + className).css("background", className);
      });

      $.each($(".bgcolor5 span"), function () {
        var className = $(this).attr('class');
        $(".bgcolor5 ." + className).css("background", className);
      });
      $.each($(".bgcolor9 span"), function () {
        var className = $(this).attr('class');
        $(".bgcolor9 ." + className).css("background", className);
      });

      // loop ใส่สีให้ กับ ปุ่มเลือกสีตัวอักษร
      $.each($(".txtcolor span"), function () {
        var className = $(this).attr('class');
        $(".txtcolor ." + className).css("background", className);
      });
      // save รูปที่แต่งแล้ว
      $(".save").click(function () {
        if(code_b == undefined ){
          code_b='<?php echo $row['color_body'];?>';
        }
        if(code_sco == undefined ){
          code_sco='<?php echo $row['color_pocket'];?>';
        }
        if(code_bag == undefined ){
          code_bag='<?php echo $row['color_bag'];?>';
        }
        if(code_h == undefined ){
          code_h='<?php echo $row['color_sleeve'];?>';
        }
        if(code_co == undefined ){
          code_co='<?php echo $row['color_collar'];?>';
        }
        console.log("b :"+code_b+"\n sco :"+code_sco+"\n bag :"+code_bag+"\n salavee :"+code_h+"\n collar :"+code_co);
        $.ajax({
          method:"POST",
          url: "Incart.php",
          data: { Frontpolo: screen.toDataURL('png'),BackPolo: screen1.toDataURL('png')},
          dataType: 'json',
          success: function(data){
               var d=Date.now()*2;
                var genid='<?php echo $row['design_id'];?>';
                canvas = new fabric.Canvas('myCanvas');
                canvas.setHeight(800);
                canvas.setWidth(1200);
                fabric.Image.fromURL('images/polo/NC.png', function(img) {
                    img.set({ left: 0,
                    top: 0,
                    angle: 0});
                    img.set('selectable', false);
                    canvas.add(img);  
                    canvas.add(new fabric.Text(genid,{ 
                      fontSize: 20 ,
                      fill: 'black',
                      fontFamily: 'Kanit', 
                      left: 340, 
                      top: 30 
                    }));
                    var b="สีเสื้อ : #"+code_b;
                    canvas.add(new fabric.Text(b, { 
                      fontSize: 20 ,
                      fill: 'black',
                      fontFamily: 'Kanit', 
                      left: 230, 
                      top: 640 
                    }));
                    var sco="สาบเสื้อ : #"+code_sco;
                    canvas.add(new fabric.Text(sco, { 
                      fontSize: 20 ,
                      fill: 'black',
                      fontFamily: 'Kanit', 
                      left: 230, 
                      top: 690
                    }));    
                    var bag="กระเป๋าเสื้อ : #"+code_bag;
                    canvas.add(new fabric.Text(bag, { 
                      fontSize: 20 ,
                      fill: 'black',
                      fontFamily: 'Kanit', 
                      left: 230, 
                      top: 740
                    }));
                    var salavee="แขนเสื้อ : #"+code_h;
                    canvas.add(new fabric.Text(salavee, { 
                      fontSize: 20 ,
                      fill: 'black',
                      fontFamily: 'Kanit', 
                      left: 660, 
                      top: 640
                    }));
                    var collar="ปกเสื้อ : #"+code_co;
                    canvas.add(new fabric.Text(collar, { 
                      fontSize: 20 ,
                      fill: 'black',
                      fontFamily: 'Kanit', 
                      left: 660, 
                      top: 690
                    }));
                });
                fabric.Image.fromURL(data[0], function(img) {
                    img.set({ left: 100,
                    top: 25,
                    angle: 0,
                    opacity: 0.9});
                    img.set('selectable', false);
                    canvas.add(img);      
                });
                fabric.Image.fromURL(data[1], function(img) {
                    img.set({ left: 570,
                    top: 25,
                    angle: 0,
                  opacity: 0.9});
                    canvas.add(img);    
                }); 
                Swal.fire({
                title: 'กำลังดาวน์โหลดอัตโนมัติ',
                html:
                  'ภาพของคุณจะพร้อมในอีก  <strong></strong> วินาที.<br/><br/>' +
                  '',
                timer: 1000,
                didOpen: () => {
                  const content = Swal.getHtmlContainer()
                  const $ = content.querySelector.bind(content)

                  Swal.showLoading()

                  function toggleButtons () {
                    stop.disabled = !Swal.isTimerRunning()
                    resume.disabled = Swal.isTimerRunning()
                  }
                  timerInterval = setInterval(() => {
                    Swal.getHtmlContainer().querySelector('strong')
                      .textContent = (Swal.getTimerLeft() / 1000)
                        .toFixed(0)
                  }, 100)
                },
                willClose: () => {
                  clearInterval(timerInterval)
                }
              })
                setTimeout(function(){
                canvas.deactivateAll().renderAll();  
                //console.log(canvas.toDataURL('png')); 
                let downloadLink = document.createElement('a');
                downloadLink.setAttribute('download', genid+'.png');
                var url = canvas.toDataURL(canvas.deactivateAll().renderAll());
                downloadLink.setAttribute('href',url);
                downloadLink.click();
                $.ajax({
                  method:"POST",
                  url: "In_edit.php",
                  data: {  polo: canvas.toDataURL('png'), id:genid,
                          color_body:code_b,
                          color_pocket:code_sco,
                          color_bag:code_bag,
                          color_sleeve:code_h,
                          color_collar:code_co,
                          user_id:'<?php echo $_SESSION['user_id'];?>'
                        },
                  dataType: 'json',
                  success: function(data){
                    console.log(genid);
                    console.log(data);
                    
                }});
               }, 1000);
            
            //console.log(data[1]);
            
        }});
        
        
      });

     
      // event การเลือกสีเสื้อ
      $(".bgcolor span").click(function () {
        var color = $(this).attr('class');
        bg = screen.item(0);
        bg.filters.length = 0;
        bg.filters.push(new fabric.Image.filters.Tint({
          color: color,
          opacity: .63
        }));
        bg.applyFilters(screen.renderAll.bind(screen));
        code_b=color;
      });
      $(".bgcolor span").click(function () {
        var color = $(this).attr('class');
        bg = screen1.item(0);
        bg.filters.length = 0;
        bg.filters.push(new fabric.Image.filters.Tint({
          color: color,
          opacity: .63
        }));
        bg.applyFilters(screen1.renderAll.bind(screen1));
      });

      $(".bgcolor3 span").click(function () {
        var color = $(this).attr('class');
        bg = screen.item(2);
        bg.filters.length = 0;
        bg.filters.push(new fabric.Image.filters.Tint({
          color: color,
          opacity: .63
        }));
        bg.applyFilters(screen.renderAll.bind(screen));
        code_bag=color;
      });

      $(".bgcolor4 span").click(function () {
        var color = $(this).attr('class');
        bg = screen.item(3);
        bg.filters.length = 0;
        bg.filters.push(new fabric.Image.filters.Tint({
          color: color,
          opacity: .63
        }));
        bg.applyFilters(screen.renderAll.bind(screen));
        code_h=color;
      });
      $(".bgcolor5 span").click(function () {
        var color = $(this).attr('class');
        bg = screen.item(4);
        bg.filters.length = 0;
        bg.filters.push(new fabric.Image.filters.Tint({
          color: color,
          opacity: .63
        }));
        bg.applyFilters(screen.renderAll.bind(screen));
        code_co=color;
        console.log("s"+code_co);
      });

      $(".bgcolor5 span").click(function () {
        var color = $(this).attr('class');
        bg = screen1.item(1);
        bg.filters.length = 0;
        bg.filters.push(new fabric.Image.filters.Tint({
          color: color,
          opacity: .63
        }));
        bg.applyFilters(screen1.renderAll.bind(screen1));
        
      });


      $(".bgcolor2 span").click(function () {
        var color = $(this).attr('class');
        bg = screen.item(1);
        bg.filters.length = 0;
        bg.filters.push(new fabric.Image.filters.Tint({
          color: color,
          opacity: .73
        }));
        bg.applyFilters(screen.renderAll.bind(screen));
        code_sco=color;
      });
      

      // event การเลือกสีตัวอักษร
      $(".bgcolor6 span").click(function () {
        var color = $(this).attr('class');
        var obtxt = screen.getActiveObject();
        console.log(color);
        if (obtxt) {
          obtxt.setColor("#"+color);
          screen.renderAll();
        } else {
          alert("กรุณาเลือกตัวอักษรที่ต้องการเปลี่ยนสี");
        }
      });
      $(".bgcolor77 span").click(function () {
        var color = $(this).attr('class');
        var obtxt = screen1.getActiveObject();
        console.log(color);
        if (obtxt) {
          obtxt.setColor("#"+color);
          screen1.renderAll();
        } else {
          alert("กรุณาเลือกตัวอักษรที่ต้องการเปลี่ยนสี");
        }
      });
      // event ในการเพิ่มรูปภาพ
      $("#imagebroswer").change(function () {
        if(this.files[0].size > 2200000){
          alert("ไฟล์มีขนาดใหญ่เกิน 2 MB.");
          this.value = "";
        };
        var e = $(this);
        var reader = new FileReader();
        reader.onload = function (event) {
          var imgObj = new Image();
          imgObj.src = event.target.result;
          imgObj.onload = function () {
            var image = new fabric.Image(imgObj);
            image.set({
              angle: 0,
              scaleX: 300 / image.width,
              scaleY: 330 / image.height,

            });
            screen.centerObject(image);
            screen.add(image);
            screen.renderAll();
          }
        }
        reader.readAsDataURL(e[0].files[0]);
      });
      $("#imagebroswer1").change(function () {
        if(this.files[0].size > 2200000){
          alert("ไฟล์มีขนาดใหญ่เกิน 2 MB.");
          this.value = "";
        };
        var e = $(this);
        var reader = new FileReader();
        reader.onload = function (event) {
          var imgObj = new Image();
          imgObj.src = event.target.result;
          imgObj.onload = function () {
            var image = new fabric.Image(imgObj);
            image.set({
              angle: 0,
              scaleX: 300 / image.width,
              scaleY: 330 / image.height,

            });
            screen1.centerObject(image);
            screen1.add(image);
            screen1.renderAll();
          }
        }
        reader.readAsDataURL(e[0].files[0]);
      });
      // กดปุ่ม delete
      $('body').keyup(function (e) {
        if (e.keyCode == 46) {
          var activeObject = screen.getActiveObject();
          screen.remove(activeObject);
          var activeObject1 = screen1.getActiveObject();
          screen1.remove(activeObject1);
        }
      });
      $(".addtxt").click(function () {
        var txt = $(".txt").val();
        var obtext = new fabric.Text(txt, { fontSize: 20, fontFamily: 'Kanit'  });
        screen.centerObject(obtext);
        screen.add(obtext);
        screen.renderAll();
        $(".txt").val("");

      });
      $(".addtxt1").click(function () {
        var txt = $(".txt1").val();
        var obtext = new fabric.Text(txt, { fontSize: 20, fontFamily: 'Kanit' });
        screen1.centerObject(obtext);
        screen1.add(obtext);
        screen1.renderAll();
        $(".txt1").val("");

      });
      
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
    });
  </script>