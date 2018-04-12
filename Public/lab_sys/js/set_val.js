jQuery(document).ready(function() {
    jQuery("[name='btn1']").each(
        function(index) {
            var vo_id1 = jQuery("[name='vo_id1']").eq(index)[0];
            var vo_dat1 = jQuery("[name='vo_dat1']").eq(index)[0];
            var vo_id2 = jQuery("[name='vo_id2']").eq(index)[0];
            var vo_dat2 = jQuery("[name='vo_dat2']").eq(index)[0];
            var vo_id_val = jQuery("[name='id']").eq(index)[0].innerHTML.split("&")[0];
            var vo_dat_val = jQuery("[name='dat']").eq(index)[0].innerHTML;
            vo_id1.value = vo_id_val;
            vo_id2.value = vo_id_val;
            vo_dat1.value = vo_dat_val;
            vo_dat2.value = vo_dat_val;
        }
    );
})