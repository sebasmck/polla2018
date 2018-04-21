// match, group
    function match_games_C(){
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
        var m1_A1 = $('#M1C1').val();
        var m1_A2 = $('#M1C2').val();
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
        var m2_A3 = $('#M2C3').val();
        var m2_A4 = $('#M2C4').val();
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
        var m3_A1 = $('#M3C1').val();
        var m3_A3 = $('#M3C3').val();
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
        var m4_A4 = $('#M4C4').val();
        var m4_A2 = $('#M4C2').val();
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
        var m5_A4 = $('#M5C4').val();
        var m5_A1 = $('#M5C1').val();
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
        var m6_A2 = $('#M6C2').val();
        var m6_A3 = $('#M6C3').val();
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
        $('#CP1').empty();
        $('#CP2').empty();
        $('#CP3').empty();
        $('#CP4').empty();

        $('#CP1').html(cont1);
        $('#CP2').html(cont2);
        $('#CP3').html(cont3);
        $('#CP4').html(cont4);

        // Partidos Ganados
        $('#CW1').empty();
        $('#CW2').empty();
        $('#CW3').empty();
        $('#CW4').empty();

        $('#CW1').html(win1);
        $('#CW2').html(win2);
        $('#CW3').html(win3);
        $('#CW4').html(win4);

        // Partidos Ganados
        $('#CD1').empty();
        $('#CD2').empty();
        $('#CD3').empty();
        $('#CD4').empty();

        $('#CD1').html(emp1);
        $('#CD2').html(emp2);
        $('#CD3').html(emp3);
        $('#CD4').html(emp4);

        // Partidos Perdidos
        $('#CL1').empty();
        $('#CL2').empty();
        $('#CL3').empty();
        $('#CL4').empty();

        $('#CL1').html(lose1);
        $('#CL2').html(lose2);
        $('#CL3').html(lose3);
        $('#CL4').html(lose4);
        // Goles A favor
        $('#CF1').empty();
        $('#CF2').empty();
        $('#CF3').empty();
        $('#CF4').empty();
        $('#CF1').html(afavor1);
        $('#CF2').html(afavor2);
        $('#CF3').html(afavor3);
        $('#CF4').html(afavor4);

        // Goles en contra
        $('#CA1').empty();
        $('#CA2').empty();
        $('#CA3').empty();
        $('#CA4').empty();

        $('#CA1').html(encontra1);
        $('#CA2').html(encontra2);
        $('#CA3').html(encontra3);
        $('#CA4').html(encontra4);

        // Goles de diferencia
        $('#CGD1').empty();
        $('#CGD2').empty();
        $('#CGD3').empty();
        $('#CGD4').empty();

        $('#CGD1').html(diferen1);
        $('#CGD2').html(diferen2);
        $('#CGD3').html(diferen3);
        $('#CGD4').html(diferen4);

        // Goles de diferencia
        $('#CPTS1').empty();
        $('#CPTS2').empty();
        $('#CPTS3').empty();
        $('#CPTS4').empty();

        $('#CPTS1').html(pts1);
        $('#CPTS2').html(pts2);
        $('#CPTS3').html(pts3);
        $('#CPTS4').html(pts4);

        sortTable("Standings3");
    }
