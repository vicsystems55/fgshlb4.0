
        function openFileOption4(_button)
                {
                    console.log('i was clicked');
                    var chooser = _button +'_chooser';
                document.getElementById(chooser).click();
                }
            function previewFile4(chooser){
                console.log('hello');


                var file = $('#' + chooser).get(0).files[0];

                

            
        
                if(file){
                    var reader = new FileReader();
        
                    reader.onload = function(){
                        var previewer = chooser +'_preview';
                    
                        $('#' + previewer).css('background-image', 'url("' + reader.result + '")');
                        $("#previewImg").attr("src", reader.result);
                        
                        // $("#bg-img").css("background-image", "url(" + reader.result + ")");
                    }
        
                    reader.readAsDataURL(file);
                }
            }

        function openFileOption()
                {
                document.getElementById("file1").click();
                }
            function previewFile(input){
                console.log('hello');


                var file = $("input[name=featured_img1]").get(0).files[0];

            
        
                if(file){
                    var reader = new FileReader();
        
                    reader.onload = function(){
                        
                    
                        $('#bg-img').css('background-image', 'url("' + reader.result + '")');
                        $("#previewImg").attr("src", reader.result);
                        
                        // $("#bg-img").css("background-image", "url(" + reader.result + ")");
                    }
        
                    reader.readAsDataURL(file);
                }
            }


            function openFileOption2()
                {
                document.getElementById("file2").click();
                }
            function previewFile2(input){
                console.log('hello');


                var file = $("input[name=featured_img2]").get(0).files[0];

            
        
                if(file){
                    var reader = new FileReader();
        
                    reader.onload = function(){
                        
                    
                        $('#bg-img2').css('background-image', 'url("' + reader.result + '")');
                        $("#previewImg2").attr("src", reader.result);
                        
                        // $("#bg-img").css("background-image", "url(" + reader.result + ")");
                    }
        
                    reader.readAsDataURL(file);
                }
            }
                    