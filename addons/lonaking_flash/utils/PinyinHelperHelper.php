<?php
/*
 __________________________________________________
|  Encode by BajieTeam on we7                      |
|__________________________________________________|
*/

goto P9RoW;
BhIXR:
class PinyinHelper
{
    public static function getPinyin($text)
    {
        $newText = self::to(self::utf8_to_gb2312($text), false);
        return str_replace("\137", '', $newText);
    }
    public static function utf8_to($s, $isfirst = false)
    {
        return self::to(self::utf8_to_gb2312($s), $isfirst);
    }
    public static function utf8_to_gb2312($s)
    {
        return iconv("\x55\x54\x46\55\x38", "\107\102\62\63\x31\x32\57\57\x49\107\x4e\x4f\x52\105", $s);
    }
    public static function to($s, $isfirst = false)
    {
        goto WdFGA;
        c3Ias:
        $i = 0;
        goto CtKK8;
        y30k2:
        if ($ascii >= 48 && $ascii <= 57 || $ascii >= 97 && $ascii <= 122) {
            goto Fbz_6;
        }
        goto PtS5b;
        FySlV:
        QRI9D:
        goto y30k2;
        syixP:
        goto J2c8S;
        goto NDah7;
        yagjj:
        $res .= strtolower($s[$i]);
        goto XV1Wt;
        OuSia:
        $res .= $s[$i];
        goto syixP;
        GaOY4:
        $ascii = $ascii * 256 + $ascii2 - 65536;
        goto juh5w;
        treP9:
        H1If_:
        goto MiCKC;
        XV1Wt:
        J2c8S:
        goto y7jwP;
        VIGNa:
        if ($ascii < 255 && $ascii > 0) {
            goto QRI9D;
        }
        goto SvFS2;
        SsGdo:
        $pinyin_arr = self::get_pinyin_array();
        goto c3Ias;
        NDah7:
        grVwX:
        goto yagjj;
        y7jwP:
        goto kHJZI;
        goto gM5pP;
        lkko3:
        goto WK76v;
        goto b40oP;
        bA6d8:
        $res .= "\137";
        goto RQpaD;
        lZYcm:
        foreach ($pinyin_arr as $py => $asc) {
            goto m2wIP;
            f2S2B:
            qlYLe:
            goto MbjHu;
            rNExL:
            goto H1If_;
            goto VIeUo;
            m2wIP:
            if (!($asc <= $ascii)) {
                goto Vd_M5;
            }
            goto Q5wyj;
            VIeUo:
            Vd_M5:
            goto f2S2B;
            Q5wyj:
            $res .= $isfirst ? $py[0] : $py;
            goto rNExL;
            MbjHu:
        }
        goto treP9;
        f5VIL:
        RtITW:
        goto U823J;
        zY2W5:
        if (!($i < $len)) {
            goto ili9w;
        }
        goto MWqDk;
        p3Yjh:
        Fbz_6:
        goto OuSia;
        SvFS2:
        if ($ascii < -20319 || $ascii > -10247) {
            goto uP9Z7;
        }
        goto lZYcm;
        MWqDk:
        $ascii = ord($s[$i]);
        goto zwMBc;
        G5eev:
        return $res;
        goto yap8h;
        CtKK8:
        WK76v:
        goto zY2W5;
        MiCKC:
        goto kHJZI;
        goto FySlV;
        b40oP:
        ili9w:
        goto G5eev;
        PtS5b:
        if ($ascii >= 65 && $ascii <= 90) {
            goto grVwX;
        }
        goto bA6d8;
        zwMBc:
        if (!($ascii > 128)) {
            goto U11NX;
        }
        goto D58AX;
        g1qBx:
        kHJZI:
        goto f5VIL;
        juh5w:
        U11NX:
        goto VIGNa;
        RQpaD:
        goto J2c8S;
        goto p3Yjh;
        gM5pP:
        uP9Z7:
        goto FMJiL;
        DXeV5:
        $len = strlen($s);
        goto SsGdo;
        U823J:
        $i++;
        goto lkko3;
        FMJiL:
        $res .= "\x5f";
        goto g1qBx;
        WdFGA:
        $res = '';
        goto DXeV5;
        D58AX:
        $ascii2 = ord($s[++$i]);
        goto GaOY4;
        yap8h:
    }
    public static function to_first($s)
    {
        goto bb42w;
        CGYkX:
        if ($ascii > 224) {
            goto eFKPV;
        }
        goto O9bf6;
        zM3xM:
        thyLe:
        goto dyLl2;
        wumnq:
        VPa3x:
        goto AzzID;
        FVRYk:
        nKgfs:
        goto mMnhT;
        a80pR:
        Zv9gK:
        goto mrmKm;
        j5gfE:
        $asc = ord($s[0]) * 256 + ord($s[1]) - 65536;
        goto L5YrA;
        ypOOq:
        if (!($asc >= -12556 && $asc <= -11848)) {
            goto Iv8LA;
        }
        goto a2KSd;
        fejF6:
        if (!($asc >= -13318 && $asc <= -12839)) {
            goto YnveL;
        }
        goto FEIbo;
        lF1Fz:
        Sq3gb:
        goto ypOOq;
        fdJKV:
        return "\153";
        goto qaF_M;
        tXa4M:
        if (!($asc >= -20283 && $asc <= -19776)) {
            goto thyLe;
        }
        goto uqXBu;
        GtTj0:
        oeZGK:
        goto DsQOX;
        qQiwL:
        if (!($asc >= -19218 && $asc <= -18711)) {
            goto Zv9gK;
        }
        goto vet6E;
        YEK7P:
        goto oeZGK;
        goto FVRYk;
        P3ra_:
        return false;
        goto YEK7P;
        J1unb:
        Tb5oc:
        goto tXa4M;
        t1QwA:
        if (!($asc >= -14914 && $asc <= -14631)) {
            goto aMRmr;
        }
        goto x9m5l;
        TGfGn:
        Iv8LA:
        goto RLSdA;
        eY8nZ:
        if (!($asc >= -14090 && $asc <= -13319)) {
            goto lGMV4;
        }
        goto PME9Y;
        FEIbo:
        return "\164";
        goto DPhoj;
        s401B:
        BSg75:
        goto j5gfE;
        Q1sta:
        if (!(strlen($s) < 2)) {
            goto BSg75;
        }
        goto oZLEs;
        MCZtz:
        if ($ascii >= 65 && $ascii <= 90) {
            goto nKgfs;
        }
        goto UO0Ix;
        Eu1cY:
        JSB4y:
        goto eY8nZ;
        AYmUC:
        return "\x68";
        goto AMaeN;
        O9bf6:
        if ($ascii < 128) {
            goto tsA5z;
        }
        goto PsWkM;
        nHEkD:
        IAuZG:
        goto sR6vZ;
        TR_KG:
        return "\x72";
        goto Eu1cY;
        AzzID:
        if (!($asc >= -16474 && $asc <= -16213)) {
            goto gByTY;
        }
        goto fdJKV;
        V1BFh:
        tp1KA:
        goto mvAv_;
        qUCCv:
        if (!($asc >= -16212 && $asc <= -15641)) {
            goto CRAsb;
        }
        goto JYjsG;
        lNAQS:
        return "\x6e";
        goto nHEkD;
        Ztv9h:
        if (!($asc >= -17922 && $asc <= -17418)) {
            goto qqImq;
        }
        goto AYmUC;
        qaF_M:
        gByTY:
        goto qUCCv;
        mrmKm:
        if (!($asc >= -18710 && $asc <= -18527)) {
            goto feXN1;
        }
        goto kInf1;
        x9m5l:
        return "\x70";
        goto EugWZ;
        SZSSB:
        feXN1:
        goto z8un5;
        mMnhT:
        return strtolower($s[0]);
        goto A6mMD;
        JH5K8:
        return "\x63";
        goto HmnCL;
        SLkY5:
        CWCRX:
        goto zFskL;
        cIos9:
        if (!($asc >= -15640 && $asc <= -15166)) {
            goto g4EOF;
        }
        goto O0rRp;
        a2KSd:
        return "\x78";
        goto TGfGn;
        Pcp5V:
        return "\x79";
        goto DFOdw;
        DPhoj:
        YnveL:
        goto yxdPH;
        DZcEd:
        if (!($asc >= -17417 && $asc <= -16475)) {
            goto VPa3x;
        }
        goto qI9Ne;
        EugWZ:
        aMRmr:
        goto eVL6I;
        zd4Dl:
        $s = self::utf8_to_gb2312($s[0] . $s[1] . $s[2]);
        goto kgmXE;
        PsWkM:
        goto arzTq;
        goto JIkRU;
        RsEwD:
        if (!($asc >= -18239 && $asc <= -17923)) {
            goto NqJ0h;
        }
        goto mN4An;
        GshXr:
        CRAsb:
        goto cIos9;
        mvAv_:
        return $s[0];
        goto GtTj0;
        UO0Ix:
        if ($ascii >= 97 && $ascii <= 122) {
            goto tp1KA;
        }
        goto P3ra_;
        HmnCL:
        G66Tc:
        goto qQiwL;
        A6mMD:
        goto oeZGK;
        goto V1BFh;
        AMaeN:
        qqImq:
        goto DZcEd;
        kgmXE:
        goto arzTq;
        goto zhTSS;
        Wqflu:
        return "\161";
        goto SLkY5;
        L5YrA:
        if (!($asc >= -20319 && $asc <= -20284)) {
            goto Tb5oc;
        }
        goto D_Bfl;
        eVL6I:
        if (!($asc >= -14630 && $asc <= -14150)) {
            goto CWCRX;
        }
        goto Wqflu;
        qI9Ne:
        return "\x6a";
        goto wumnq;
        D_Bfl:
        return "\x61";
        goto J1unb;
        hKQbM:
        lpEIx:
        goto bpVGY;
        zhTSS:
        tsA5z:
        goto MCZtz;
        dyLl2:
        if (!($asc >= -19775 && $asc <= -19219)) {
            goto G66Tc;
        }
        goto JH5K8;
        kInf1:
        return "\145";
        goto SZSSB;
        oZLEs:
        return false;
        goto s401B;
        O0rRp:
        return "\x6d";
        goto YoE7R;
        zFskL:
        if (!($asc >= -14149 && $asc <= -14091)) {
            goto JSB4y;
        }
        goto TR_KG;
        yxdPH:
        if (!($asc >= -12838 && $asc <= -12557)) {
            goto Sq3gb;
        }
        goto Ot9cB;
        bpVGY:
        return false;
        goto E4t7k;
        fYY1Y:
        uBBRj:
        goto RsEwD;
        mN4An:
        return "\x67";
        goto CPjkW;
        YoE7R:
        g4EOF:
        goto Po1Hc;
        rlnZv:
        if (!($asc >= -11055 && $asc <= -10247)) {
            goto lpEIx;
        }
        goto tiddS;
        bb42w:
        $ascii = ord($s[0]);
        goto CGYkX;
        PME9Y:
        return "\x73";
        goto y057F;
        Ot9cB:
        return "\x77";
        goto lF1Fz;
        y057F:
        lGMV4:
        goto fejF6;
        Po1Hc:
        if (!($asc >= -15165 && $asc <= -14923)) {
            goto IAuZG;
        }
        goto lNAQS;
        JYjsG:
        return "\154";
        goto GshXr;
        CPjkW:
        NqJ0h:
        goto Ztv9h;
        JIkRU:
        eFKPV:
        goto zd4Dl;
        uqXBu:
        return "\142";
        goto zM3xM;
        CPi2c:
        return "\x66";
        goto fYY1Y;
        qJmMo:
        Az8ri:
        goto t1QwA;
        z8un5:
        if (!($asc >= -18526 && $asc <= -18240)) {
            goto uBBRj;
        }
        goto CPi2c;
        vet6E:
        return "\144";
        goto a80pR;
        sR6vZ:
        if (!($asc >= -14922 && $asc <= -14915)) {
            goto Az8ri;
        }
        goto MeWf3;
        DFOdw:
        hYMDh:
        goto rlnZv;
        DsQOX:
        arzTq:
        goto Q1sta;
        MeWf3:
        return "\157";
        goto qJmMo;
        RLSdA:
        if (!($asc >= -11847 && $asc <= -11056)) {
            goto hYMDh;
        }
        goto Pcp5V;
        tiddS:
        return "\172";
        goto hKQbM;
        E4t7k:
    }
    public static function get_pinyin_array()
    {
        goto XjG00;
        vPqEs:
        $val = explode("\x7c", $v);
        goto xUHNW;
        jvHgr:
        b6lk1:
        goto k1944;
        zV_gB:
        arsort($py_arr);
        goto saXVg;
        xUHNW:
        $py_arr = array_combine($key, $val);
        goto zV_gB;
        fAQqr:
        if (!isset($py_arr)) {
            goto b6lk1;
        }
        goto fGCEt;
        saXVg:
        return $py_arr;
        goto UXDS4;
        fGCEt:
        return $py_arr;
        goto jvHgr;
        k1944:
        $k = "\141\x7c\141\x69\174\141\156\174\141\156\x67\174\141\157\x7c\142\141\174\142\x61\151\x7c\x62\141\x6e\174\x62\x61\x6e\x67\x7c\x62\x61\157\x7c\x62\x65\151\x7c\x62\145\x6e\x7c\142\145\156\x67\174\142\x69\174\x62\x69\141\156\x7c\x62\x69\x61\157\174\142\151\145\x7c\142\151\x6e\174\142\x69\x6e\x67\x7c\142\x6f\x7c\142\x75\174\143\x61\174\143\141\x69\x7c\x63\141\x6e\174\x63\x61\x6e\x67\174\143\141\x6f\x7c\x63\145\174\x63\145\156\147\x7c\143\150\141\174\143\150\141\151\174\x63\150\x61\x6e\x7c\143\150\141\x6e\x67\174\x63\150\x61\157\x7c\143\x68\x65\x7c\143\150\x65\156\x7c\x63\150\x65\x6e\147\x7c\143\150\x69\174\143\x68\x6f\x6e\147\174\143\x68\x6f\165\x7c\143\150\165\x7c\x63\x68\165\141\151\174\x63\x68\165\141\156\x7c\x63\x68\165\141\156\x67\x7c\143\x68\x75\x69\174\143\x68\x75\156\174\143\150\x75\157\x7c\143\x69\174\143\x6f\x6e\147\174\143\157\x75\174\x63\x75\x7c\143\165\x61\x6e\174\x63\x75\x69\x7c\x63\x75\x6e\x7c\x63\165\157\x7c\144\141\174\144\x61\151\x7c\144\141\156\174\144\x61\156\147\174\x64\x61\157\174\144\145\x7c\144\145\x6e\147\x7c\144\151\x7c\144\151\141\156\174\x64\x69\141\157\174\144\x69\145\x7c\144\151\156\x67\174\144\151\165\174\x64\157\x6e\x67\x7c\144\157\165\174\x64\165\x7c\144\x75\141\x6e\x7c\x64\165\151\x7c\x64\x75\x6e\x7c\x64\165\x6f\x7c\x65\x7c\x65\156\x7c\145\x72\174\x66\x61\x7c\x66\x61\156\x7c\x66\141\156\147\x7c\x66\x65\151\x7c\x66\x65\156\x7c\146\145\156\147\174\146\x6f\174\146\x6f\165\x7c\146\165\x7c\147\141\174\147\141\x69\174\x67\x61\x6e\x7c\147\x61\156\147\174\147\x61\157\x7c\147\x65\x7c\147\x65\x69\x7c\147\145\x6e\x7c\x67\145\156\x67\x7c\x67\157\x6e\x67\x7c\x67\157\x75\174\147\165\174\x67\x75\x61\x7c\147\x75\x61\x69\174\147\x75\x61\156\174\147\x75\141\x6e\x67\x7c\x67\165\x69\174\147\x75\156\x7c\147\165\x6f\x7c\150\141\x7c\150\141\151\174\150\x61\156\x7c\150\141\x6e\x67\174\x68\141\157\174\150\x65\x7c\x68\145\151\174\150\x65\156\x7c\x68\145\x6e\x67\174\150\x6f\x6e\147\x7c\x68\x6f\165\x7c\x68\x75\174\150\165\x61\x7c\x68\x75\x61\151\x7c\150\x75\x61\x6e\x7c\150\165\x61\x6e\x67\x7c\x68\165\x69\174\x68\x75\x6e\174\150\165\x6f\x7c\x6a\x69\174\x6a\151\x61\174\152\151\141\x6e\x7c\x6a\151\141\156\147\174\x6a\151\x61\x6f\x7c\x6a\151\x65\174\152\151\x6e\x7c\152\x69\x6e\x67\174\x6a\x69\x6f\156\x67\174\152\151\165\174\x6a\165\174\x6a\165\141\156\x7c\x6a\x75\x65\x7c\152\165\x6e\x7c\153\141\174\x6b\x61\x69\174\x6b\x61\156\x7c\153\x61\x6e\x67\x7c\x6b\141\x6f\174\x6b\145\x7c\153\x65\156\174\x6b\145\x6e\147\174\153\157\156\x67\174\153\157\x75\x7c\x6b\165\x7c\x6b\x75\141\174\x6b\x75\x61\151\x7c\x6b\x75\x61\156\x7c\153\x75\141\x6e\147\x7c\153\165\151\174\x6b\x75\156\174\x6b\165\157\174\154\x61\x7c\x6c\x61\x69\x7c\154\x61\x6e\174\154\141\x6e\147\174\154\x61\x6f\x7c\154\145\x7c\154\x65\151\174\x6c\145\156\147\174\x6c\151\174\154\151\141\174\x6c\x69\x61\x6e\x7c\154\151\x61\x6e\147\174\154\x69\141\x6f\174\x6c\x69\145\x7c\x6c\151\x6e\x7c\154\x69\156\x67\174\154\151\165\174\154\157\x6e\147\174\154\157\165\174\154\165\x7c\154\x76\x7c\x6c\x75\141\x6e\174\x6c\165\x65\x7c\x6c\x75\156\x7c\x6c\x75\157\174\155\x61\x7c\155\x61\x69\174\155\141\156\174\x6d\141\x6e\147\x7c\x6d\141\157\174\155\145\x7c\x6d\x65\x69\174\155\145\x6e\x7c\x6d\x65\156\x67\x7c\x6d\x69\174\155\x69\x61\156\174\x6d\151\x61\x6f\174\155\151\x65\174\155\x69\x6e\174\155\x69\x6e\x67\x7c\x6d\x69\x75\174\155\x6f\x7c\x6d\x6f\x75\x7c\155\x75\x7c\156\x61\x7c\x6e\141\151\x7c\x6e\x61\156\x7c\156\141\156\147\x7c\x6e\x61\157\x7c\x6e\x65\174\x6e\x65\151\174\156\x65\156\x7c\x6e\145\156\x67\x7c\156\151\x7c\x6e\151\141\156\x7c\x6e\151\x61\156\147\174\x6e\151\141\x6f\x7c\156\151\145\174\156\x69\x6e\174\x6e\x69\x6e\147\x7c\x6e\151\165\x7c\156\157\x6e\147\174\x6e\x75\x7c\156\x76\174\156\x75\x61\x6e\x7c\x6e\x75\x65\174\x6e\x75\x6f\x7c\x6f\174\157\165\x7c\160\141\174\160\141\x69\174\160\141\x6e\174\x70\x61\x6e\147\x7c\x70\x61\157\174\x70\145\x69\x7c\160\x65\156\x7c\160\145\156\147\x7c\x70\151\174\x70\x69\x61\x6e\x7c\x70\x69\141\157\174\x70\x69\145\174\x70\x69\x6e\x7c\160\x69\156\147\174\x70\157\x7c\160\165\174\x71\x69\174\x71\151\x61\174\x71\151\x61\156\x7c\x71\151\x61\x6e\147\174\x71\x69\141\x6f\x7c\161\x69\x65\174\x71\x69\156\x7c\161\151\156\x67\x7c\161\151\157\156\147\174\161\151\x75\174\161\x75\x7c\x71\165\141\x6e\x7c\161\165\x65\x7c\x71\165\156\174\162\x61\x6e\x7c\162\x61\x6e\x67\174\162\141\x6f\174\x72\145\x7c\162\145\x6e\174\x72\x65\x6e\147\174\162\151\x7c\162\x6f\x6e\x67\x7c\x72\157\165\x7c\x72\x75\174\162\165\141\156\x7c\162\165\151\174\162\165\x6e\x7c\162\165\x6f\174\163\141\x7c\163\x61\151\x7c\163\141\156\174\163\141\156\x67\x7c\x73\141\x6f\174\x73\x65\x7c\163\145\x6e\x7c\x73\145\x6e\147\174\163\150\x61\174\163\x68\x61\x69\x7c\x73\150\141\x6e\x7c\163\x68\x61\x6e\147\174\163\150\x61\157\x7c\x73\x68\145\174\163\x68\x65\x6e\174\163\x68\x65\156\147\x7c\x73\150\151\174\x73\150\157\165\174\163\x68\165\174\x73\150\x75\x61\x7c\163\150\x75\141\151\174\163\150\x75\x61\156\x7c\x73\x68\165\x61\x6e\x67\174\x73\x68\x75\x69\174\163\150\165\x6e\174\163\150\x75\x6f\x7c\163\151\x7c\x73\x6f\156\147\x7c\163\157\x75\174\x73\x75\x7c\x73\x75\x61\156\174\x73\x75\x69\174\x73\x75\x6e\x7c\x73\165\x6f\x7c\x74\x61\x7c\164\x61\151\x7c\164\x61\x6e\174\164\x61\156\x67\x7c\x74\x61\157\174\164\x65\x7c\164\145\x6e\147\x7c\164\151\174\x74\151\x61\x6e\174\x74\151\x61\157\x7c\x74\x69\145\x7c\x74\151\x6e\147\x7c\164\x6f\x6e\x67\174\164\157\x75\x7c\x74\x75\x7c\164\165\141\156\x7c\164\x75\151\174\164\x75\x6e\174\164\165\157\174\x77\141\174\167\141\x69\x7c\167\x61\156\x7c\x77\141\x6e\x67\174\167\145\151\174\x77\x65\156\174\167\x65\156\147\x7c\167\x6f\x7c\167\x75\174\x78\x69\174\170\151\x61\174\x78\151\141\x6e\x7c\x78\x69\141\x6e\147\174\x78\x69\x61\x6f\174\170\x69\x65\x7c\x78\151\156\174\x78\151\156\x67\x7c\170\x69\157\156\x67\x7c\x78\151\165\174\x78\165\x7c\x78\x75\x61\156\174\170\165\x65\x7c\170\165\156\x7c\171\x61\x7c\171\141\x6e\174\x79\141\x6e\147\x7c\x79\x61\157\174\x79\x65\x7c\x79\151\x7c\171\x69\156\x7c\171\x69\x6e\147\174\171\157\174\x79\x6f\156\147\174\x79\157\165\x7c\x79\165\174\171\x75\141\156\174\x79\165\145\x7c\x79\x75\x6e\174\172\141\x7c\172\x61\x69\x7c\172\x61\156\174\x7a\141\x6e\x67\174\172\141\157\x7c\172\x65\174\172\145\151\174\172\x65\x6e\174\172\x65\x6e\147\x7c\172\150\x61\174\172\x68\141\151\x7c\172\x68\x61\x6e\174\x7a\150\x61\156\x67\x7c\172\x68\x61\x6f\x7c\172\x68\x65\x7c\172\x68\145\x6e\x7c\x7a\150\x65\x6e\x67\174\x7a\x68\x69\x7c\x7a\150\x6f\156\x67\x7c\x7a\x68\157\165\x7c\172\x68\x75\x7c\x7a\150\165\x61\x7c\x7a\150\165\x61\x69\x7c\172\x68\x75\141\156\174\x7a\x68\x75\141\156\147\x7c\x7a\150\x75\x69\174\172\x68\165\156\174\172\x68\165\157\174\172\x69\x7c\172\157\x6e\147\174\172\157\165\x7c\172\x75\174\x7a\165\141\156\174\x7a\165\151\174\x7a\165\x6e\x7c\172\165\x6f";
        goto bkfms;
        XjG00:
        static $py_arr;
        goto fAQqr;
        bkfms:
        $v = "\55\x32\60\x33\x31\71\x7c\55\62\60\x33\x31\67\174\55\x32\60\x33\60\64\174\55\x32\60\x32\71\65\x7c\x2d\62\x30\62\x39\62\174\55\62\60\62\x38\x33\174\x2d\x32\x30\x32\x36\x35\x7c\55\x32\60\62\x35\67\x7c\x2d\x32\x30\62\64\x32\174\55\62\x30\62\63\60\174\55\x32\x30\60\x35\61\174\x2d\x32\x30\60\63\66\174\55\x32\60\60\x33\62\174\x2d\62\60\x30\x32\66\174\55\x32\x30\60\x30\62\x7c\x2d\61\71\71\71\60\x7c\55\x31\71\x39\70\66\174\x2d\61\x39\x39\x38\62\174\x2d\x31\71\71\67\x36\174\x2d\61\x39\70\x30\x35\174\x2d\x31\71\x37\x38\64\x7c\55\61\71\67\x37\x35\x7c\55\61\x39\67\67\x34\x7c\x2d\61\71\x37\66\63\174\55\61\71\67\65\x36\x7c\x2d\x31\x39\x37\x35\61\x7c\55\61\x39\67\x34\x36\174\x2d\61\71\x37\x34\61\174\x2d\x31\71\x37\63\x39\174\x2d\x31\x39\67\x32\x38\x7c\55\x31\71\67\62\65\x7c\x2d\61\x39\x37\x31\65\174\x2d\x31\71\65\64\60\174\55\61\x39\65\63\x31\174\55\x31\x39\65\x32\x35\174\55\61\71\x35\x31\65\x7c\55\x31\71\x35\60\60\x7c\55\x31\x39\x34\70\64\x7c\55\61\71\64\x37\71\x7c\x2d\61\71\64\x36\67\174\55\x31\x39\62\x38\71\x7c\x2d\x31\71\x32\x38\70\174\55\61\x39\62\x38\61\x7c\55\x31\71\x32\67\x35\174\55\x31\71\x32\x37\60\174\x2d\61\x39\62\x36\63\174\x2d\61\x39\x32\66\61\174\55\x31\71\x32\64\71\174\55\61\71\62\64\63\174\x2d\x31\x39\x32\64\62\174\55\x31\71\x32\x33\70\174\55\61\x39\62\x33\x35\x7c\x2d\61\x39\x32\62\67\x7c\55\x31\71\x32\x32\64\174\55\x31\71\x32\x31\70\174\x2d\x31\71\x32\61\62\174\55\x31\x39\60\x33\x38\x7c\55\x31\71\60\x32\63\x7c\55\x31\x39\60\x31\x38\174\x2d\61\71\60\60\66\174\x2d\61\71\60\60\x33\x7c\x2d\61\x38\x39\x39\66\174\55\x31\70\x39\x37\67\174\55\61\x38\71\x36\61\174\55\61\70\71\x35\62\174\55\61\x38\67\70\63\x7c\55\61\x38\67\67\x34\174\x2d\x31\70\x37\x37\63\x7c\55\x31\x38\x37\x36\63\174\x2d\61\70\67\x35\66\174\x2d\61\x38\67\64\x31\x7c\55\61\x38\x37\x33\65\174\55\x31\x38\67\x33\61\x7c\55\x31\70\67\x32\x32\x7c\55\x31\x38\67\x31\x30\x7c\x2d\61\x38\x36\71\x37\x7c\55\61\70\x36\71\x36\174\55\61\70\x35\x32\x36\174\x2d\61\70\65\61\70\174\55\x31\x38\x35\x30\61\x7c\55\61\70\64\x39\x30\x7c\x2d\x31\70\64\67\x38\174\55\61\x38\x34\x36\x33\x7c\x2d\61\70\64\x34\x38\x7c\55\x31\70\x34\64\67\x7c\x2d\x31\70\64\64\66\174\55\x31\x38\62\x33\71\174\55\61\70\62\63\67\174\x2d\x31\x38\x32\x33\61\174\x2d\x31\70\x32\62\x30\x7c\55\61\70\x32\61\61\174\55\x31\x38\x32\x30\61\174\x2d\61\70\x31\70\64\x7c\x2d\x31\70\61\70\x33\174\55\x31\x38\x31\x38\x31\x7c\x2d\x31\70\60\61\62\x7c\55\x31\67\x39\x39\67\x7c\x2d\61\x37\x39\x38\x38\x7c\55\61\67\71\67\60\174\x2d\61\x37\x39\66\64\174\55\x31\x37\x39\66\x31\174\x2d\61\67\x39\x35\x30\174\x2d\61\x37\x39\64\x37\x7c\55\61\x37\x39\63\x31\174\x2d\61\x37\x39\x32\70\x7c\55\61\x37\71\x32\62\174\55\61\67\67\x35\x39\174\55\x31\67\67\x35\62\x7c\55\61\67\67\63\63\x7c\x2d\x31\x37\x37\63\x30\174\55\x31\67\x37\x32\61\x7c\x2d\61\67\67\x30\x33\x7c\x2d\61\x37\67\x30\x31\174\x2d\61\x37\66\x39\x37\x7c\x2d\61\x37\x36\71\62\174\55\61\x37\x36\x38\x33\x7c\55\61\x37\66\67\x36\174\55\61\67\x34\x39\66\174\x2d\x31\67\64\70\67\x7c\x2d\61\x37\x34\70\x32\174\55\x31\67\x34\x36\70\x7c\x2d\x31\67\x34\x35\x34\174\x2d\61\67\64\63\63\x7c\55\x31\x37\64\62\67\174\55\61\67\64\x31\67\x7c\x2d\x31\x37\62\x30\62\174\x2d\61\67\61\70\65\174\x2d\x31\66\71\70\63\x7c\x2d\x31\66\x39\x37\x30\x7c\x2d\x31\x36\x39\64\62\174\55\x31\66\x39\x31\65\174\x2d\x31\x36\x37\63\63\174\55\61\66\67\60\70\174\55\x31\66\x37\x30\x36\174\x2d\x31\x36\x36\x38\x39\x7c\55\x31\66\66\x36\x34\x7c\x2d\x31\66\x36\x35\x37\174\x2d\x31\x36\x36\64\x37\x7c\55\x31\x36\64\x37\x34\x7c\55\61\x36\64\67\x30\174\55\x31\66\64\66\65\174\x2d\61\66\x34\x35\x39\x7c\x2d\61\x36\x34\65\x32\174\x2d\61\x36\x34\64\x38\174\x2d\x31\66\x34\63\63\174\x2d\x31\x36\64\62\71\x7c\x2d\x31\66\64\x32\67\x7c\x2d\61\66\x34\62\x33\174\55\x31\66\x34\x31\71\x7c\55\61\66\64\61\x32\x7c\55\61\66\x34\x30\x37\x7c\55\x31\66\64\60\63\174\x2d\x31\66\64\60\x31\x7c\x2d\x31\x36\63\71\63\174\x2d\x31\66\62\62\60\x7c\x2d\x31\x36\62\x31\66\x7c\55\x31\x36\x32\x31\62\x7c\55\x31\x36\x32\x30\65\174\x2d\x31\66\62\x30\62\x7c\55\x31\66\61\x38\x37\174\55\x31\66\61\70\x30\x7c\55\x31\66\x31\67\x31\174\x2d\61\x36\x31\66\71\174\55\61\66\61\x35\70\x7c\x2d\61\66\61\x35\x35\x7c\x2d\x31\65\x39\x35\x39\x7c\55\61\x35\71\65\70\x7c\x2d\61\x35\x39\x34\x34\x7c\x2d\x31\x35\71\x33\63\174\x2d\x31\65\x39\62\x30\x7c\55\x31\65\71\61\65\x7c\x2d\61\x35\x39\x30\63\174\55\x31\x35\70\70\x39\174\x2d\x31\x35\x38\x37\70\174\x2d\61\65\67\x30\67\174\x2d\61\x35\67\60\x31\x7c\x2d\61\65\x36\70\61\x7c\x2d\x31\x35\66\66\67\x7c\x2d\x31\x35\x36\x36\x31\174\55\61\65\66\65\x39\174\55\61\x35\x36\65\62\x7c\55\x31\65\66\x34\x30\x7c\x2d\x31\65\66\63\x31\174\x2d\61\x35\x36\x32\x35\x7c\x2d\61\x35\x34\x35\64\174\55\x31\65\x34\x34\70\x7c\x2d\61\65\x34\63\x36\x7c\55\61\x35\64\63\x35\x7c\55\61\x35\64\x31\71\174\x2d\61\x35\x34\x31\x36\x7c\55\61\65\x34\x30\x38\x7c\55\61\x35\x33\71\64\x7c\55\x31\x35\x33\70\x35\x7c\55\61\x35\x33\67\67\x7c\55\x31\65\x33\x37\x35\174\55\x31\x35\x33\x36\71\174\x2d\61\65\x33\x36\x33\x7c\x2d\x31\x35\x33\66\62\x7c\x2d\61\x35\x31\x38\63\x7c\x2d\61\65\x31\x38\60\174\x2d\x31\65\61\x36\x35\x7c\x2d\61\x35\61\x35\70\174\x2d\61\x35\x31\65\63\x7c\55\61\x35\61\65\60\174\55\x31\x35\x31\x34\x39\x7c\55\61\65\61\64\x34\174\55\x31\65\x31\x34\x33\174\55\x31\65\61\64\61\174\x2d\61\65\x31\x34\60\x7c\x2d\x31\65\61\x33\x39\x7c\55\x31\65\61\x32\x38\x7c\55\x31\65\61\x32\x31\174\x2d\61\65\x31\61\x39\x7c\x2d\x31\65\61\61\x37\x7c\55\x31\65\61\61\x30\x7c\55\x31\x35\x31\x30\x39\x7c\55\x31\x34\x39\x34\61\x7c\55\x31\64\x39\63\x37\174\55\61\x34\71\x33\x33\174\x2d\61\64\71\63\x30\174\55\61\64\71\62\71\174\x2d\x31\x34\71\62\70\x7c\x2d\61\64\x39\62\x36\174\x2d\x31\64\71\62\62\174\x2d\61\64\71\x32\x31\x7c\55\x31\x34\x39\61\x34\174\55\61\x34\71\60\x38\x7c\55\x31\64\71\60\x32\x7c\x2d\61\x34\x38\x39\64\x7c\x2d\x31\64\70\70\71\174\55\61\x34\70\x38\62\x7c\x2d\61\64\70\67\63\174\55\61\x34\70\x37\61\x7c\x2d\61\x34\70\x35\67\174\x2d\x31\64\x36\67\70\174\x2d\61\x34\66\67\x34\174\55\x31\64\66\67\60\x7c\x2d\61\x34\x36\x36\70\174\x2d\61\x34\66\x36\63\x7c\x2d\x31\x34\x36\65\64\x7c\55\61\64\66\x34\x35\x7c\x2d\x31\x34\x36\x33\x30\x7c\x2d\x31\x34\65\x39\64\x7c\55\x31\x34\x34\x32\71\174\55\x31\x34\64\x30\67\174\55\x31\64\63\x39\x39\174\55\61\x34\63\70\64\x7c\x2d\x31\x34\63\x37\x39\x7c\x2d\x31\64\63\x36\70\174\55\61\x34\x33\65\65\x7c\x2d\61\64\63\x35\x33\x7c\55\61\x34\x33\x34\65\174\x2d\61\x34\61\67\60\174\55\61\64\61\x35\x39\174\55\61\64\x31\x35\x31\x7c\55\61\64\61\64\x39\174\x2d\x31\x34\61\x34\x35\x7c\x2d\61\x34\x31\64\x30\174\x2d\61\x34\61\63\x37\x7c\x2d\61\x34\61\x33\x35\x7c\x2d\x31\64\61\62\x35\174\55\61\x34\x31\x32\x33\174\55\61\x34\x31\62\62\x7c\55\x31\x34\x31\x31\x32\x7c\x2d\61\x34\x31\60\71\x7c\55\x31\x34\x30\71\x39\x7c\x2d\x31\64\x30\x39\x37\174\55\x31\x34\x30\x39\64\x7c\x2d\61\x34\x30\71\x32\174\x2d\x31\64\60\71\x30\x7c\x2d\x31\64\x30\x38\67\x7c\55\x31\64\x30\70\x33\174\55\x31\x33\x39\61\x37\x7c\55\61\x33\x39\61\x34\x7c\x2d\x31\x33\71\x31\x30\174\55\x31\63\71\x30\x37\x7c\x2d\61\63\x39\x30\x36\174\55\x31\63\x39\x30\65\174\x2d\x31\x33\70\x39\66\x7c\x2d\x31\x33\x38\x39\64\x7c\x2d\61\63\x38\67\x38\x7c\55\61\x33\x38\67\60\174\x2d\61\x33\70\65\71\x7c\55\x31\63\70\64\x37\174\55\x31\x33\x38\63\61\x7c\x2d\61\x33\x36\65\70\x7c\55\61\63\x36\61\61\x7c\55\61\x33\66\x30\x31\174\55\61\x33\64\60\66\x7c\55\x31\63\x34\60\x34\174\x2d\x31\63\64\60\x30\174\55\x31\x33\63\x39\70\174\55\61\x33\x33\71\65\174\55\61\63\x33\x39\x31\x7c\55\x31\x33\x33\x38\67\x7c\55\x31\63\x33\70\63\x7c\55\61\63\x33\66\x37\x7c\55\61\x33\x33\65\71\x7c\x2d\61\63\63\x35\x36\x7c\x2d\x31\x33\63\64\x33\174\x2d\x31\x33\x33\64\60\x7c\55\61\63\x33\62\x39\x7c\55\61\63\x33\62\66\174\55\61\63\63\61\70\x7c\x2d\61\x33\61\64\67\174\55\61\x33\x31\x33\x38\x7c\55\x31\63\x31\x32\x30\174\55\61\63\x31\x30\67\x7c\x2d\61\x33\60\71\66\x7c\x2d\x31\x33\60\x39\65\x7c\55\61\63\x30\x39\x31\174\55\x31\63\60\67\x36\174\55\61\x33\x30\x36\70\x7c\x2d\61\63\x30\x36\63\174\x2d\x31\63\x30\66\x30\174\x2d\x31\x32\70\x38\70\174\55\61\62\70\67\65\x7c\x2d\x31\x32\x38\67\x31\174\x2d\61\62\x38\x36\60\x7c\x2d\61\62\x38\65\70\174\55\61\x32\70\x35\62\x7c\x2d\61\62\x38\64\71\174\x2d\61\x32\x38\x33\70\174\55\61\x32\70\x33\61\174\x2d\x31\x32\70\62\x39\x7c\55\61\x32\x38\61\x32\174\x2d\61\x32\x38\x30\x32\x7c\55\x31\62\x36\60\x37\174\x2d\61\x32\65\x39\67\174\55\x31\x32\65\x39\64\174\55\61\x32\65\70\65\x7c\55\x31\x32\65\x35\66\174\55\61\62\63\65\x39\x7c\x2d\61\62\x33\x34\66\174\x2d\61\62\x33\62\x30\x7c\55\61\62\x33\60\60\x7c\x2d\x31\x32\x31\62\x30\174\55\x31\62\60\71\x39\174\x2d\x31\x32\60\70\x39\174\x2d\61\x32\60\67\64\174\x2d\61\62\x30\x36\x37\174\55\x31\x32\60\65\70\174\x2d\x31\62\60\x33\x39\x7c\55\61\61\70\x36\x37\174\x2d\x31\x31\70\x36\61\174\55\61\61\x38\x34\67\x7c\x2d\x31\61\x38\63\61\174\x2d\x31\x31\67\x39\x38\x7c\x2d\x31\61\x37\x38\x31\174\55\61\61\66\x30\64\174\x2d\61\x31\65\x38\71\174\x2d\61\61\x35\x33\x36\x7c\x2d\x31\61\63\x35\x38\x7c\x2d\61\x31\x33\64\60\174\x2d\61\61\63\63\71\174\x2d\x31\x31\63\x32\x34\x7c\x2d\61\61\63\x30\x33\x7c\x2d\x31\x31\60\x39\x37\x7c\55\x31\61\60\x37\67\x7c\x2d\61\61\x30\x36\67\x7c\x2d\61\61\60\65\65\x7c\x2d\x31\61\60\65\62\x7c\55\61\61\x30\64\x35\x7c\55\x31\x31\60\64\x31\174\x2d\61\61\x30\63\x38\x7c\x2d\61\x31\60\x32\x34\x7c\x2d\61\61\x30\x32\x30\x7c\x2d\x31\x31\60\61\71\174\x2d\x31\x31\60\x31\70\x7c\55\x31\61\60\x31\64\174\x2d\61\60\x38\63\x38\x7c\55\x31\60\x38\63\62\x7c\55\61\60\70\x31\x35\174\55\61\60\x38\x30\x30\x7c\55\61\60\67\71\x30\174\x2d\61\x30\x37\70\x30\x7c\55\x31\x30\x37\66\x34\174\55\x31\x30\65\x38\67\x7c\55\x31\60\65\64\x34\174\55\61\60\x35\x33\x33\174\x2d\61\60\65\x31\x39\x7c\x2d\x31\x30\x33\63\61\x7c\x2d\61\x30\63\x32\71\x7c\55\x31\x30\x33\x32\x38\x7c\x2d\x31\x30\x33\x32\x32\174\55\x31\x30\x33\61\x35\x7c\55\61\x30\x33\x30\x39\174\x2d\61\60\63\x30\67\x7c\x2d\x31\x30\62\x39\66\174\55\61\x30\x32\x38\x31\174\55\61\x30\x32\x37\x34\174\x2d\61\60\62\67\x30\x7c\x2d\x31\x30\x32\x36\x32\174\55\61\60\62\66\60\x7c\x2d\61\60\62\65\66\174\55\x31\x30\62\x35\64";
        goto AIGR8;
        AIGR8:
        $key = explode("\174", $k);
        goto vPqEs;
        UXDS4:
    }
}
goto ziif7;
P9RoW:
$start_time = microtime(1);
goto BhIXR;
ziif7:
?>
