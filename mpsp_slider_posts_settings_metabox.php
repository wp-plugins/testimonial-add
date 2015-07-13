<?php

function tss_mpsp_slider_posts_settings($post){
    // $post is already set, and contains an object: the WordPress post
    global $post;
 //////////////////////////////////////////////////////////////////////////
                                                                        //  
                               //START                                 //
                                                                      //  
                                                                     //
    ///////  MAIN SETTINGS var assign BOX Starts HERE!!! /////////////

    $mpsp_post_types = get_post_meta($post->ID,'mpsp_post_types',true);
    $mpsp_posts_visible = get_post_meta($post->ID,'mpsp_posts_visible',true);
    $mpsp_posts_Desc_limit = get_post_meta($post->ID,'mpsp_posts_Desc_limit',true);
    $mpsp_posts_order = get_post_meta($post->ID,'mpsp_posts_order',true);
    $mpsp_posts_orderby = get_post_meta($post->ID,'mpsp_posts_orderby',true);
    $mpsp_posts_key = get_post_meta($post->ID,'mpsp_posts_key',true);
    $mpsp_posts_value = get_post_meta($post->ID,'mpsp_posts_value',true);
    $mpsp_posts_img_size = get_post_meta($post->ID,'mpsp_posts_img_size',true);
    $mpsp_slide_layout_custom = get_post_meta($post->ID,'mpsp_slide_layout_custom',true);



    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );


    ?>

<div class='formLayout'>

  <div id="mpsp_posts_settings">

      <br>
      <br>

      <label for="mpsp_posts_visible">No. of Posts In Slider :</label>
      <input type="number" name="mpsp_posts_visible" value="<?php echo $mpsp_posts_visible; ?>">

      <br>
      <label for="mpsp_posts_order">Posts Order :</label>
      <select name="mpsp_posts_order">
        <option value="ASC"
<?php selected( "ASC", $mpsp_posts_order ); ?>


        >Ascending</option>
        <option value="DESC"
<?php selected( "DESC", $mpsp_posts_order ); ?>

        >Descending</option>

      </select>
      <br>
      <br>

      <label for="mpsp_posts_orderby"  title="Sort retrieved posts by.">Posts Order By :</label >
      <select name="mpsp_posts_orderby">
        <option selected value=""
        >Choose..</option>
        <option value="none" 

        <?php selected( 'none',$mpsp_posts_orderby ); ?>

        >None</option>
        <option value="rand"
        <?php selected( 'rand',$mpsp_posts_orderby ); ?>

        >Random</option>
        <option value="id"
        <?php selected( 'id',$mpsp_posts_orderby ); ?>

        >ID</option>
        <option value="title"
        <?php selected( 'title',$mpsp_posts_orderby ); ?>

        >Title</option>
        <option value="name"
        <?php selected( 'name',$mpsp_posts_orderby ); ?>
>Slug</option>
        <option value="date"
        <?php selected( 'date',$mpsp_posts_orderby ); ?>

        >Date - Default</option>
        <option value="modified"
        <?php selected( 'modified',$mpsp_posts_orderby ); ?>
        >Modified Date</option>
        <option value="parent"
        <?php selected( 'parent',$mpsp_posts_orderby ); ?>

        >Parent ID</option>
        <option value="menu_order" <?php selected( 'menu_order',$mpsp_posts_orderby ); ?>>Comment Count</option>>Menu Order</option>
        <option value="comment_count" <?php selected( 'comment_count',$mpsp_posts_orderby ); ?>>Comment Count</option>
        

      </select>
      <br>
      <br>
      <div style="display:none;">
      <h2 align="center">Select layout</h2>
      <label for="mpsp_layout_1"><img src="<?php echo plugins_url('img/layout-def.png',__FILE__); ?>" width="150px" height"150px"></label>

      <input type="radio" name="mpsp_slide_layout_custom" id='mpsp_layout_1' value="display:none;" style="width:15px;"  <?php checked( "display:none;", $mpsp_slide_layout_custom ); ?>
   checked >
      <br>

      <label for="mpsp_layout_2"><img src="<?php echo plugins_url('img/layout-1.png',__FILE__); ?>" width="150px" height"150px"></label>
      <input type="radio" name="mpsp_slide_layout_custom" id='mpsp_layout_2'  value='float:left; margin-right:15px;' style="width:15px;"

<?php checked( "float:left; margin-right:15px;", $mpsp_slide_layout_custom ); ?>
      >
          <br>

      <label for="mpsp_layout_3"><img src="<?php echo plugins_url('img/layout-2.png',__FILE__); ?>" width="150px" height"150px"></label>
      <input type="radio" name="mpsp_slide_layout_custom" id='mpsp_layout_3'
      value='margin-left:40%;'style="width:15px;" selected     
<?php checked( "margin-left:40%;", $mpsp_slide_layout_custom ); ?>
      >
          <br>
          <label for="mpsp_layout_4"><img src="<?php echo plugins_url('img/layout-3.png',__FILE__); ?>" width="150px" height"150px"></label>
      <input type="radio" name="mpsp_slide_layout_custom" id='mpsp_layout_4'

      value='float:right;margin-left:15px;' style="width:15px;"     
<?php checked( "float:right;margin-left:15px;", $mpsp_slide_layout_custom ); ?>

      >
      </div>
          <br>


  </div>
  
</div>



<?php
  }


  ?>