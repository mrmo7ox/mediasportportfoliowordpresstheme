<?php  get_header() ?>


<div id="hero"
    class="bg-black xfont font600 w-full md:h-[400px] gap-5 md:flex-row flex-col-reverse	 flex p-5 md:p-10 justify-center items-center">

    <div class="w-full md:w-[50%] h-full gap-4 flex  flex-col justify-center items-center">
        <h3 class=" md:text-[45px] text-[35px]">I'm John Doe, and I craft visual stories with a creative touch.</h3>
        <span class="w-full md:w-[75%] flex justify-center items-center gap-4">

            <a href="#"
                class="shadow-md w-[50%] text-center py-2 rounded-full duration-200 transtion-all hover:scale-[1.05] visited:text-white bg-[#00a6fb] text-white">
                Contact me
            </a>
            <a href="#"
                class="shadow-md w-[50%] text-center py-2 rounded-full duration-200 transtion-all hover:scale-[1.05] visited:text-white bg-[#00a6fb] text-white">
                My works
            </a>
        </span>
    </div>
    <div class=" md:w-[50%] w-full h-full justify-center items-center flex">
        <img class="md:h-[130%] h-full "
            src="http://mediasportportfolio.local/wp-content/themes/flaron/patterns/images/hero-portfolio.png" alt="">
    </div>

</div>

<div id="clubs" class=" flex justify-center items-center w-full flex-col my-12 py-2 bg-[#00000008]">

    <h3 class="xfont text-center w-full text-[#e3e3e3] flex justify-center items-center">
        Previously Working With
    </h3>

    <div class="w-full h-24 flex justify-center items-center gap-8">
        <img class="filter grayscale h-[65%]"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Wydad-AC-logo-casablanca-morocco.png/800px-Wydad-AC-logo-casablanca-morocco.png"
            alt="">
        <img class="filter grayscale h-[65%]"
            src="https://upload.wikimedia.org/wikipedia/commons/5/51/Juventus_FC_2017_logo.png" alt="">
        <img class="filter grayscale h-[65%]"
            src="https://upload.wikimedia.org/wikipedia/en/b/be/Raja_Casablanca_Logo.png" alt="">
        <img class="filter grayscale h-[65%]" src="https://upload.wikimedia.org/wikipedia/commons/d/d3/MAS_de_Fes.png"
            alt="">
        <img class="filter grayscale h-[65%]"
            src="https://seeklogo.com/images/O/olympique-club-khouribga-ock-logo-33CAEACE34-seeklogo.com.png" alt="">

    </div>

</div>
<div id="about" class=" xfont w-full flex  flex-col md:flex-row justify-center items-start gap-4 px-4">
    <span
        class="bg-[#242424] shadow-md flex flex-col justify-between items-center gap-4 text-white w-full md:w-[350px] h-full rounded-xl">
        <img class="md:w-[100%]  h-auto rounded-md"
            src="https://images.pexels.com/photos/697509/pexels-photo-697509.jpeg?cs=srgb&dl=pexels-andrewpersonaltraining-697509.jpg&fm=jpg"
            alt="">
        <p class="p-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id earum dicta ea magnam molestias fugiat, tempore
            aliquid. Nisi tempore obcaecati magnam earum eveniet ipsum perferendis? Cum ut nisi pariatur excepturi.
        </p>

    </span>
    <span class="w-full md:w-[60%] h-full flex justify-start flex-col">
        <h3 class="shadow-md bg-[#242424] rounded-xl text-white text-center text-[100px]">ABOUT</h3>
        <div class=" shadow-md w-full bg-[#242424] mt-4 p-4 rounded-xl">
            <h3 class="text-white text-[20px]"><i class="fa-solid fa-briefcase"></i> Experience</h3>
            <li class="text-white text-[18px] mt-3 ml-2">Title Title Title Title</li>
            <h3 class="text-[#efefef] ml-9 mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
                Lorem
                Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book</h3>
            <li class="text-white text-[18px] mt-3 ml-2">Title Title Title Title</li>
            <h3 class="text-[#efefef] ml-9 mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
                Lorem
                Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book</h3>
            <li class="text-white text-[18px] mt-3 ml-2">Title Title Title Title</li>
            <h3 class="text-[#efefef] ml-9 mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
                Lorem
                Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book</h3>
        </div>

    </span>

</div>
<div class="xfont w-full flex flex-col my-4 justify-center items-center">
    <h3 class="flex justify-center items-center text-[50px]" >Work Showcase</h3>
    <h5 class="flex w-[90%] flex  items-center gap-1" ><i class="fa-solid fa-video"></i> Videos</h5>
    <div class="swiper mySwiper w-[90%] ">
        <div class="swiper-wrapper">
            <?php
          $category_slug = 'videos';
      
          $args = array(
              'post_type'      => 'post',      
              'posts_per_page' => -1,         
              'category_name'  => $category_slug 
          );
      
          $query = new WP_Query($args);
      
          if ($query->have_posts()) :
              
              while ($query->have_posts()) : $query->the_post();
                  $content = get_the_content();
                  
                  preg_match_all('/<figure class="wp-block-video">(.*?)<\/figure>/is', $content, $matches);
                  
                  if (!empty($matches[1])) {
                      foreach ($matches[1] as $figure_content) {
                          echo '<div class="swiper-slide">';
                          echo $figure_content; 
                          echo '</div>';
                      }
                  }
                  
              endwhile;
              
              wp_reset_postdata();
              
          endif;
          ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <h5 class="flex w-[90%] flex  items-center gap-1 mt-2" ><i class="fa-solid fa-image"></i> Images</h5>
            <?php
        $category_slug = 'images';

        $args = array(
            'post_type'      => 'post',      
            'posts_per_page' => -1,         
            'category_name'  => $category_slug 
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
      
            
            $pattern_index = 0;

            echo '<div class="w-[90%] grid grid-cols-6 gap-4 p-4">';
            
            while ($query->have_posts()) : $query->the_post();
                $content = get_the_content();
                
                preg_match_all('/<img\s+[^>]*>/i', $content, $matches);
                
                if (!empty($matches[0])) {
                    foreach ($matches[0] as $img_tag) {
                        
                        echo '<div id="grid_img" class="h-[300px] md:h-[250px] col-span-6 xl:col-span-2 md:col-span-3 object-cover grid_img rounded-md">';
                        echo $img_tag; 
                        echo '</div>';
                        
                    }
                }
            endwhile;
            
            echo '</div>';
            
            wp_reset_postdata();
        endif;
        ?>

        
            

</div>
<div id="contact" class=" xfont flex-col md:flex-row flex justify-center items-center gap-5 bg-[#f7f7f7] p-10 w-full mt-4">
    <span class="w-[80%] md:w-[50%] flex justify-center items-center flex-col">
        <h3 class="text-[50px] text-[#00a6fb]">Get In Touch</h3>
        <p class="ml-4 max-w-[350px]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, quod
            repellendus? Id
            molestias et,
            facilis corrupti libero quis non? Rerum cumque deserunt ipsam aut nobis sit ad in vero eaque.</p>
        <span class="flex justify-center items-center w-full gap-4 mt-4">
            <a
                class="hover:scale-[0.9] duration-200 transtion-all cursor-pointer visited:text-white hover:text-[#00a6fb]">
                <i class="text-[40px] fa-solid fa-location-dot"></i>
            </a>
            <a
                class="hover:scale-[0.9] duration-200 transtion-all cursor-pointer visited:text-white hover:text-[#00a6fb]">
                <i class="text-[50px] text-[24px] fa-brands fa-square-whatsapp"></i>
            </a>
            <a
                class="hover:scale-[0.9] duration-200 transtion-all cursor-pointer visited:text-white hover:text-[#00a6fb]  ">
                <i class=" text-[50px] fa-brands fa-square-facebook"></i>
            </a>
            <a
                class="hover:scale-[0.9] duration-200 transtion-all cursor-pointer visited:text-white hover:text-[#00a6fb] ">
                <i class=" text-[50px] fa-brands fa-square-instagram"></i>
            </a>
            <a
                class="hover:scale-[0.9] duration-200 transtion-all cursor-pointer visited:text-white hover:text-[#00a6fb]">
                <i class=" text-[50px] fa-brands fa-square-youtube"></i>
            </a>
        </span>
    </span>
    <span class="w-[80%] md:w-[50%]">
        <form class="  rounded-md  bg-[#242424] w-full md:w-[75%] flex flex flex-col gap-4 p-4 rounded-xl">
            <h3 class="text-center text-[24px] text-white">Send a Message</h3>
            <input class="active:outline-[#00a6fb]  bg-white h-14 rounded-md px-4 " placeholder="Name" type="text">
            <input class="active:outline-[#00a6fb]  bg-white h-14 rounded-md px-4 " placeholder="Email" type="text">
            <textarea class="bg-white h-24 rounded-md p-4 " placeholder="Message" type="text"></textarea>
            <button
                class="bg-[#00a6fb] text-white rounded-md outline-none border-none p-2 hover:scale-[0.98] duration-200 transtion-all"
                type="submit">Send</button>
        </form>
    </span>
</div>
<?php  get_footer() ?>