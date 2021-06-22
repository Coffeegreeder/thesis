<template>
  <div class="">
    <div class="frame">
      <Gallery v-if="x < 0 && y == 0" />
      <Blog v-else-if="x < 0 && y > 0"/>
      <Media v-else-if="x == 0 && y > 0"/>
      <Shop v-else-if="x > 0 && y > 0"/>
      <Services v-else-if="x > 0 && y == 0"/>
      <Promo v-else-if="x > 0 && y < 0"/>
      <Donat v-else-if="x == 0 && y < 0"/>
      <Visitcard v-else-if="x < 0 && y < 0"/>
      <Empty v-else-if="x == 0 && y == 0"/>
    </div>

      <button class="question-btn" @click="refresh"> Сбросить </button>
    </div>

</template>

<script language="JavaScript" type="text/javascript">
fimg = document.images;
 for(j=0;j<fimg.length;j++){
fimg[j].galleryimg = "no";
fimg[j].oncontextmenu = function(){return false;}
fimg[j].ondragstart = function(){return false;}
}
</script>

<script>
  $(function() { //DOM Ready

    $("section").gridster({
      widget_margins: [0, 0],
      widget_base_dimensions: [124, 124],
      max_cols: 7,
      max_rows: 5,
      // widget_selector: ">li",
      avoid_overlapped_widgets: true
    }).data('gridster').disable();
  });
</script>

<script>
    import Gallery from './v-templates/gallery';
    import Blog from './v-templates/blog';
    import Media from './v-templates/media';
    import Shop from './v-templates/shop';
    import Services from './v-templates/services';
    import Promo from './v-templates/promo';
    import Donat from './v-templates/donat';
    import Visitcard from './v-templates/visitcard';
    import Empty from './v-templates/empty';

    export default {
        name: "Result",
        components: {
            Gallery,
            Blog,
            Media,
            Shop,
            Services,
            Promo,
            Donat,
            Visitcard,
            Empty
        },
        props: {
            testing: {
                type: Object,
                default  (){
                    return {}
                }
            }
        },
        methods: {

        },
        computed: {
                page () {
    	            return this.$store.state.page
                },
                x () {
                  return this.$store.state.x
                },
                y () {
                    return this.$store.state.y
                }
            }

    }
</script>
