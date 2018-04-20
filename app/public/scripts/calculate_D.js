// match, group
    function match_games_D(){
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
        var m1_A1 = $('#M1D1').val();
        var m1_A2 = $('#M1D2').val();
        if (m1_A1 != '' && m1_A2 != '')
        {
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
        var m2_A3 = $('#M2D3').val();
        var m2_A4 = $('#M2D4').val();
        if (m2_A3 != '' && m2_A4 != '')
        {
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
        var m3_A1 = $('#M3D1').val();
        var m3_A3 = $('#M3D3').val();
        if (m3_A1 != '' && m3_A3 != '')
        {
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
        var m4_A4 = $('#M4D4').val();
        var m4_A2 = $('#M4D2').val();
        if (m4_A4 != '' && m4_A2 != '')
        {
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
        var m5_A4 = $('#M5D4').val();
        var m5_A1 = $('#M5D1').val();
        if (m5_A4 != '' && m5_A1 != '')
        {
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
        var m6_A2 = $('#M6D2').val();
        var m6_A3 = $('#M6D3').val();
        if (m6_A2 != '' && m6_A3 != '')
        {
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
                win2++;
                lose3++;
                pts2 = pts2 + 3;
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
        $('#DP1').empty();
        $('#DP2').empty();
        $('#DP3').empty();
        $('#DP4').empty();

        $('#DP1').html(cont1);
        $('#DP2').html(cont2);
        $('#DP3').html(cont3);
        $('#DP4').html(cont4);

        // Partidos Ganados
        $('#DW1').empty();
        $('#DW2').empty();
        $('#DW3').empty();
        $('#DW4').empty();

        $('#DW1').html(win1);
        $('#DW2').html(win2);
        $('#DW3').html(win3);
        $('#DW4').html(win4);

        // Partidos Ganados
        $('#DD1').empty();
        $('#DD2').empty();
        $('#DD3').empty();
        $('#DD4').empty();

        $('#DD1').html(emp1);
        $('#DD2').html(emp2);
        $('#DD3').html(emp3);
        $('#DD4').html(emp4);

        // Partidos Perdidos
        $('#DL1').empty();
        $('#DL2').empty();
        $('#DL3').empty();
        $('#DL4').empty();

        $('#DL1').html(lose1);
        $('#DL2').html(lose2);
        $('#DL3').html(lose3);
        $('#DL4').html(lose4);

        // Goles A favor
        $('#DF1').empty();
        $('#DF2').empty();
        $('#DF3').empty();
        $('#DF4').empty();

        $('#DF1').html(afavor1);
        $('#DF2').html(afavor2);
        $('#DF3').html(afavor3);
        $('#DF4').html(afavor4);

        // Goles en contra
        $('#DA1').empty();
        $('#DA2').empty();
        $('#DA3').empty();
        $('#DA4').empty();

        $('#DA1').html(encontra1);
        $('#DA2').html(encontra2);
        $('#DA3').html(encontra3);
        $('#DA4').html(encontra4);

        // Goles de diferencia
        $('#DGD1').empty();
        $('#DGD2').empty();
        $('#DGD3').empty();
        $('#DGD4').empty();

        $('#DGD1').html(diferen1);
        $('#DGD2').html(diferen2);
        $('#DGD3').html(diferen3);
        $('#DGD4').html(diferen4);

        // Goles de diferencia
        $('#DPTS1').empty();
        $('#DPTS2').empty();
        $('#DPTS3').empty();
        $('#DPTS4').empty();

        $('#DPTS1').html(pts1);
        $('#DPTS2').html(pts2);
        $('#DPTS3').html(pts3);
        $('#DPTS4').html(pts4);

        sortTable("Standings4");
    }
