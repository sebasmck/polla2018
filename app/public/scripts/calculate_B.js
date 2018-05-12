// match, group
    function match_games_B(){
        // Partidos Jugados
        var cont1 = 0;
        var cont2 = 0;
        var cont3 = 0;
        var cont4 = 0;

        // Partidos Ganados
        var win1 = 0;
        var win2 = 0;
        var win3 = 0;
        var win4 = 0;

        // Partidos Empatados
        var emp1 = 0;
        var emp2 = 0;
        var emp3 = 0;
        var emp4 = 0;

        // Partidos GanadosPerdidos
        var lose1 = 0;
        var lose2 = 0;
        var lose3 = 0;
        var lose4 = 0;

        // Goles a Favor
        var afavor1 = 0;
        var afavor2 = 0;
        var afavor3 = 0;
        var afavor4 = 0;

        // Goles en contra
        var encontra1 = 0;
        var encontra2 = 0;
        var encontra3 = 0;
        var encontra4 = 0;

        // Goles de diferencia
        var diferen1 = 0;
        var diferen2 = 0;
        var diferen3 = 0;
        var diferen4 = 0;

        // Puntos
        var pts1 = 0;
        var pts2 = 0;
        var pts3 = 0;
        var pts4 = 0;

        // matchs1
        var m1_A1 = $('#M1B1').val();
        var m1_A2 = $('#M1B2').val();
        if (m1_A1 != '' && m1_A2 != '')
        {
            m1_A1 = parseInt(m1_A1);
            m1_A2 = parseInt(m1_A2);

            // Partidos Jugados
            cont1++;
            cont2++;

            // Partidos Ganados t1
            if (m1_A1 > m1_A2)
            {
                win1++;
                lose2++;
                pts1 = pts1 + 3;
            }

            // Partidos Ganados t2
            if (m1_A2 > m1_A1)
            {
                win2++;
                lose1++;
                pts2 = pts2 + 3;
            }

            // Partidos Empatados t1, t2
            if (m1_A1 == m1_A2)
            {
                emp1++;
                emp2++;

                pts1 = pts1 + 1;
                pts2 = pts2 + 1;
            }

            afavor1 = parseInt(afavor1) + parseInt(m1_A1);
            encontra1 = parseInt(encontra1) + parseInt(m1_A2);
            diferen1 = afavor1 - encontra1;

            afavor2 = parseInt(afavor2) + parseInt(m1_A2);
            encontra2 = parseInt(encontra2) + parseInt(m1_A1);
            diferen2 = afavor2 - encontra2;
            
        }

        // match2
        var m2_A3 = $('#M2B3').val();
        var m2_A4 = $('#M2B4').val();
        if (m2_A3 != '' && m2_A4 != '')
        {
            m2_A3 = parseInt(m2_A3);
            m2_A4 = parseInt(m2_A4);

            // Partidos Jugados
            cont3++;
            cont4++;

            // Partidos Ganados t1
            if (m2_A3 > m2_A4)
            {
                win3++;
                lose4++;
                pts3 = pts3 + 3;
            }

            // Partidos Ganados t2
            if (m2_A4 > m2_A3)
            {
                win4++;
                lose3++;
                pts4 = pts4 + 3;
            }

            // Partidos Empatados t1, t2
            if (m2_A3 == m2_A4)
            {
                emp3++;
                emp4++;

                pts3 = pts3 + 1;
                pts4 = pts4 + 1;
            }

            afavor3 = parseInt(afavor3) + parseInt(m2_A3);
            encontra3 = parseInt(encontra3) + parseInt(m2_A4);
            diferen3 = afavor3 - encontra3;

            afavor4 = parseInt(afavor4) + parseInt(m2_A4);
            encontra4 = parseInt(encontra4) + parseInt(m2_A3);
            diferen4 = afavor4 - encontra4;
        }

        // match3
        var m3_A1 = $('#M3B1').val();
        var m3_A3 = $('#M3B3').val();
        if (m3_A1 != '' && m3_A3 != '')
        {
            m3_A1 = parseInt(m3_A1);
            m3_A3 = parseInt(m3_A3);

            // Partidos Jugados
            cont1++;
            cont3++;

            // Partidos Ganados t1
            if (m3_A1 > m3_A3)
            {
                win1++;
                lose3++;
                pts1 = pts1 + 3;
            }

            // Partidos Ganados t2
            if (m3_A3 > m3_A1)
            {
                win3++;
                lose1++;
                pts3 = pts3 + 3;
            }

            // Partidos Empatados t1, t2
            if (m3_A1 == m3_A3)
            {
                emp1++;
                emp3++;

                pts1 = pts1 + 1;
                pts3 = pts3 + 1;
            }

            afavor1 = parseInt(afavor1) + parseInt(m3_A1);
            encontra1 = parseInt(encontra1) + parseInt(m3_A3);
            diferen1 = afavor1 - encontra1;

            afavor3 = parseInt(afavor3) + parseInt(m3_A3);
            encontra3 = parseInt(encontra3) + parseInt(m3_A1);
            diferen3 = afavor3 - encontra3;
        }

        // match4
        var m4_A4 = $('#M4B4').val();
        var m4_A2 = $('#M4B2').val();
        if (m4_A4 != '' && m4_A2 != '')
        {
            m4_A4 = parseInt(m4_A4);
            m4_A2 = parseInt(m4_A2);

            // Partidos Jugados
            cont4++;
            cont2++;

            // Partidos Ganados t1
            if (m4_A4 > m4_A2)
            {
                win4++;
                lose2++;
                pts4 = pts4 + 3;
            }

            // Partidos Ganados t2
            if (m4_A2 > m4_A4)
            {
                win2++;
                lose4++;
                pts2 = pts2 + 3;
            }

            // Partidos Empatados t1, t2
            if (m4_A4 == m4_A2)
            {
                emp4++;
                emp2++;

                pts4 = pts4 + 1;
                pts2 = pts2 + 1;
            }

            afavor4 = parseInt(afavor4) + parseInt(m4_A4);
            encontra4 = parseInt(encontra4) + parseInt(m4_A2);
            diferen4 = afavor4 - encontra4;

            afavor2 = parseInt(afavor2) + parseInt(m4_A2);
            encontra2 = parseInt(encontra2) + parseInt(m4_A4);
            diferen2 = afavor2 - encontra2;
        }

        // match5
        var m5_A4 = $('#M5B4').val();
        var m5_A1 = $('#M5B1').val();
        if (m5_A4 != '' && m5_A1 != '')
        {
            m5_A4 = parseInt(m5_A4);
            m5_A1 = parseInt(m5_A1);

            // Partidos Jugados
            cont4++;
            cont1++;

            // Partidos Ganados t1
            if (m5_A4 > m5_A1)
            {
                win4++;
                lose1++;
                pts4 = pts4 + 3;
            }

            // Partidos Ganados t2
            if (m5_A1 > m5_A4)
            {
                win1++;
                lose4++;
                pts1 = pts1 + 3;
            }

            // Partidos Empatados t1, t2
            if (m5_A4 == m5_A1)
            {
                emp4++;
                emp1++;

                pts4 = pts4 + 1;
                pts1 = pts1 + 1;
            }

            afavor4 = parseInt(afavor4) + parseInt(m5_A4);
            encontra4 = parseInt(encontra4) + parseInt(m5_A1);
            diferen4 = afavor4 - encontra4;

            afavor1 = parseInt(afavor1) + parseInt(m5_A1);
            encontra1 = parseInt(encontra1) + parseInt(m5_A4);
            diferen1 = afavor1 - encontra1;
        }

        // match6
        var m6_A2 = $('#M6B2').val();
        var m6_A3 = $('#M6B3').val();
        if (m6_A2 != '' && m6_A3 != '')
        {
            m6_A2 = parseInt(m6_A2);
            m6_A3 = parseInt(m6_A3);
            
            // Partidos Jugados
            cont2++;
            cont3++;

            // Partidos Ganados t1
            if (m6_A2 > m6_A3)
            {
                win2++;
                lose3++;
                pts2 = pts2 + 3;
            }

            // Partidos Ganados t2
            if (m6_A3 > m6_A2)
            {
                win3++;
                lose2++;
                pts3 = pts3 + 3;
            }

            // Partidos Empatados t1, t2
            if (m6_A2 == m6_A3)
            {
                emp2++;
                emp3++;

                pts2 = pts2 + 1;
                pts3 = pts3 + 1;
            }

            afavor2 = parseInt(afavor2) + parseInt(m6_A2);
            encontra2 = parseInt(encontra2) + parseInt(m6_A3);
            diferen2 = afavor2 - encontra2;

            afavor3 = parseInt(afavor3) + parseInt(m6_A3);
            encontra3 = parseInt(encontra3) + parseInt(m6_A2);
            diferen3 = afavor3 - encontra3;
        }

        // Partidos Jugados
        $('#BP1').empty();
        $('#BP2').empty();
        $('#BP3').empty();
        $('#BP4').empty();

        $('#BP1').html(cont1);
        $('#BP2').html(cont2);
        $('#BP3').html(cont3);
        $('#BP4').html(cont4);

        // Partidos Ganados
        $('#BW1').empty();
        $('#BW2').empty();
        $('#BW3').empty();
        $('#BW4').empty();

        $('#BW1').html(win1);
        $('#BW2').html(win2);
        $('#BW3').html(win3);
        $('#BW4').html(win4);

        // Partidos Ganados
        $('#BD1').empty();
        $('#BD2').empty();
        $('#BD3').empty();
        $('#BD4').empty();

        $('#BD1').html(emp1);
        $('#BD2').html(emp2);
        $('#BD3').html(emp3);
        $('#BD4').html(emp4);

        // Partidos Perdidos
        $('#BL1').empty();
        $('#BL2').empty();
        $('#BL3').empty();
        $('#BL4').empty();

        $('#BL1').html(lose1);
        $('#BL2').html(lose2);
        $('#BL3').html(lose3);
        $('#BL4').html(lose4);

        // Goles A favor
        $('#BF1').empty();
        $('#BF2').empty();
        $('#BF3').empty();
        $('#BF4').empty();

        $('#BF1').html(afavor1);
        $('#BF2').html(afavor2);
        $('#BF3').html(afavor3);
        $('#BF4').html(afavor4);

        // Goles en contra
        $('#BA1').empty();
        $('#BA2').empty();
        $('#BA3').empty();
        $('#BA4').empty();

        $('#BA1').html(encontra1);
        $('#BA2').html(encontra2);
        $('#BA3').html(encontra3);
        $('#BA4').html(encontra4);

        // Goles de diferencia
        $('#BGD1').empty();
        $('#BGD2').empty();
        $('#BGD3').empty();
        $('#BGD4').empty();

        $('#BGD1').html(diferen1);
        $('#BGD2').html(diferen2);
        $('#BGD3').html(diferen3);
        $('#BGD4').html(diferen4);

        // Goles de diferencia
        $('#BPTS1').empty();
        $('#BPTS2').empty();
        $('#BPTS3').empty();
        $('#BPTS4').empty();

        $('#BPTS1').html(pts1);
        $('#BPTS2').html(pts2);
        $('#BPTS3').html(pts3);
        $('#BPTS4').html(pts4);

        $("#Standings2").tablesorter({sortList: [[8,1], [7,1], [5,1]]});
    }
