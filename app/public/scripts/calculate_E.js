// match, group
    function match_games_E(){
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
        var m1_A1 = $('#M1E1').val();
        var m1_A2 = $('#M1E2').val();
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
        var m2_A3 = $('#M2E3').val();
        var m2_A4 = $('#M2E4').val();
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
        var m3_A1 = $('#M3E1').val();
        var m3_A3 = $('#M3E3').val();
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
        var m4_A4 = $('#M4E4').val();
        var m4_A2 = $('#M4E2').val();
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
        var m5_A4 = $('#M5E4').val();
        var m5_A1 = $('#M5E1').val();
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
        var m6_A2 = $('#M6E2').val();
        var m6_A3 = $('#M6E3').val();
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
        $('#EP1').empty();
        $('#EP2').empty();
        $('#EP3').empty();
        $('#EP4').empty();

        $('#EP1').html(cont1);
        $('#EP2').html(cont2);
        $('#EP3').html(cont3);
        $('#EP4').html(cont4);

        // Partidos Ganados
        $('#EW1').empty();
        $('#EW2').empty();
        $('#EW3').empty();
        $('#EW4').empty();

        $('#EW1').html(win1);
        $('#EW2').html(win2);
        $('#EW3').html(win3);
        $('#EW4').html(win4);

        // Partidos Ganados
        $('#ED1').empty();
        $('#ED2').empty();
        $('#ED3').empty();
        $('#ED4').empty();

        $('#ED1').html(emp1);
        $('#ED2').html(emp2);
        $('#ED3').html(emp3);
        $('#ED4').html(emp4);

        // Partidos Perdidos
        $('#EL1').empty();
        $('#EL2').empty();
        $('#EL3').empty();
        $('#EL4').empty();

        $('#EL1').html(lose1);
        $('#EL2').html(lose2);
        $('#EL3').html(lose3);
        $('#EL4').html(lose4);

        // Goles A favor
        $('#EF1').empty();
        $('#EF2').empty();
        $('#EF3').empty();
        $('#EF4').empty();

        $('#EF1').html(afavor1);
        $('#EF2').html(afavor2);
        $('#EF3').html(afavor3);
        $('#EF4').html(afavor4);

        // Goles en contra
        $('#EA1').empty();
        $('#EA2').empty();
        $('#EA3').empty();
        $('#EA4').empty();

        $('#EA1').html(encontra1);
        $('#EA2').html(encontra2);
        $('#EA3').html(encontra3);
        $('#EA4').html(encontra4);

        // Goles de diferencia
        $('#EGD1').empty();
        $('#EGD2').empty();
        $('#EGD3').empty();
        $('#EGD4').empty();

        $('#EGD1').html(diferen1);
        $('#EGD2').html(diferen2);
        $('#EGD3').html(diferen3);
        $('#EGD4').html(diferen4);

        // Goles de diferencia
        $('#EPTS1').empty();
        $('#EPTS2').empty();
        $('#EPTS3').empty();
        $('#EPTS4').empty();

        $('#EPTS1').html(pts1);
        $('#EPTS2').html(pts2);
        $('#EPTS3').html(pts3);
        $('#EPTS4').html(pts4);

        sortTable("Standings5");
    }
