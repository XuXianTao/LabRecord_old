function set_deft() {
    jQuery(document).ready(function() {
        var dat = new Date();
        dat.setDate(dat.getDate() + 7);
        var y_dat = dat.getFullYear();
        var m_dat = dat.getMonth() + 1;
        var d_dat = dat.getDate();
        var y = jQuery("#year")[0];
        var len = y.options.length;
        var i;
        for (i = 0; i < len; i++) {
            if (y.options[i].value == y_dat) {
                y.options[i].selected = "selected";
                break;
            }
        }
        var m = jQuery("#month")[0];
        len = m.options.length;
        for (i = 0; i < len; i++) {
            if (m.options[i].value == m_dat) {
                m.options[i].selected = "selected";
                break;
            }
        }
        var d = jQuery("#day")[0];
        len = d.options.length;
        for (i = 0; i < len; i++) {
            if (d.options[i].value == d_dat) {
                d.options[i].selected = "selected";
                break;
            }
        }
    });
}

function set_opt() {
    jQuery(document).ready(function() {
        var y_sel = jQuery("#year option:selected");
        var y_val = parseInt(y_sel.text(), 10);
        var m_sel = jQuery("#month option:selected");
        var m_val = parseInt(m_sel.text(), 10);
        var d_len = jQuery("#day option").length;
        var d = jQuery("#day");
        if (m_val == 1 || m_val == 3 || m_val == 5 || m_val == 7 || m_val == 8 || m_val == 10 || m_val == 12) {
            if (d_len < 29) {
                d.append("<option>29</option>");
            }
            if (d_len < 30) {
                d.append("<option>30</option>");
            }
            if (d_len < 31) {
                d.append("<option>31</option>");
            }
        } else if (m_val == 2) {
            //闰年
            if ((y_val % 4 == 0 && y_val % 100 != 0) || (y_val % 400 == 0)) {
                if (d_len == 30 || d_len == 31) {
                    d[0].remove(29);
                }
                if (d_len == 31) {
                    d[0].remove(30);
                }
                if (d_len < 29) {
                    d.append("<option>29</option>");
                }
            }
            //平年
            else {
                if (d_len == 29 || d_len == 30 || d_len == 31) {
                    d[0].remove(28);
                }
                if (d_len == 30 || d_len == 31) {
                    d[0].remove(29);
                }
                if (d_len == 31) {
                    d[0].remove(30);
                }
            }
        } else {
            if (d_len < 29) {
                d.append("<option>29</option>");
            }
            if (d_len < 30) {
                d.append("<option>30</option>");
            }
            if (d_len == 31) {
                d[0].remove(30);
            }
        }
    });
    window.setTimeout(set_opt, 400);
}