<?php

    const MOVES = array(
        "R" =>
            array(
                array(3, 11), array(4, 12), array(5, 13), array(11, 43), array(12, 44),
                array(13, 45), array(17, 23), array(18, 24), array(19, 17), array(20, 18),
                array(21, 19), array(22, 20), array(23, 21), array(24, 22), array(25, 5),
                array(31, 3), array(32, 4), array(43, 31), array(44, 32), array(45, 25)),
        "R2" =>
            array(
                array(3, 43), array(4, 44), array(5, 45), array(11, 31), array(12, 32),
                array(13, 25), array(17, 21), array(18, 22), array(19, 23), array(20, 24),
                array(21, 17), array(22, 18), array(23, 19), array(24, 20), array(25, 13),
                array(31, 11), array(32, 12), array(43, 3), array(44, 4), array(45, 5)),
        "R'" =>
            array(
                array(3, 31), array(4, 32), array(5, 25), array (11, 3),  array(12, 4),
                array(13, 5), array(17, 19), array(18, 20), array(19, 21), array(20, 22),
                array(21, 23), array(22, 24), array(23, 17), array(24, 18), array(25, 45),
                array(31, 43), array(32, 44), array(43, 11), array(44, 12), array(45, 13)),

        "U" =>
            array(
                array(1, 7), array(2, 8), array(3, 1), array(4, 2), array(5, 3),
                array(6, 4), array(7, 5), array(8, 6), array(9, 17), array(10, 18),
                array(11, 19), array(17, 25), array(18, 26), array(19, 27), array(25, 33),
                array(26, 34), array(27, 35), array(33, 9), array(34, 10), array(35, 11)),
        "U2" =>
            array(
                array(1, 5), array(2, 6), array(3, 7), array(4, 8), array(5, 1),
                array(6, 2), array(7, 3), array(8, 4), array(9, 25), array(10, 26),
                array(11, 27), array(17, 33), array(18, 34), array(19, 35), array(25, 9),
                array(26, 10), array(27, 11), array(33, 17), array(34, 18), array(35, 19)),
        "U'" =>
            array(
                array(1, 3), array(2, 4), array(3, 5), array(4, 6), array(5, 7),
                array(6, 8), array(7, 1), array(8, 2), array(9, 33), array(10, 34),
                array(11, 35), array(17, 9), array(18, 10), array(19, 11), array(25, 17),
                array(26, 18), array(27, 19), array(33, 25), array(34, 26), array(35, 27)),

        "F" =>
            array(
                array(5, 35), array(6, 36), array(7, 37), array(9, 15), array(10, 16),
                array(11, 9), array(12, 10), array(13, 11), array(14, 12), array(15, 13),
                array(16, 14), array(17, 7), array(23, 5), array(24, 6), array(35, 41),
                array(36, 42), array(37, 43), array(41, 23), array(42, 24), array(43, 17)),
        "F2" =>
            array(
                array(5, 41), array(6, 42), array(7, 43), array(9, 13), array(10, 14),
                array(11, 15), array(12, 16), array(13, 9), array(14, 10), array(15, 11),
                array(16, 12), array(17, 37), array(23, 35), array(24, 36), array(35, 23),
                array(36, 24), array(37, 17), array(41, 5), array(42, 6), array(43, 7)),
        "F'" =>
            array(
                array(5, 23), array(6, 24), array(7, 17), array(9, 11), array(10, 12),
                array(11, 13), array(12, 14), array(13, 15), array(14, 16), array(15, 9),
                array(16, 10), array(17, 43), array(23, 41), array(24, 42), array(35, 5),
                array(36, 6), array(37, 7), array(41, 35), array(42, 36), array(43, 37)),

        "L" =>
            array(
                array(1, 29), array(7, 27), array(8, 28), array(9, 1), array(15, 7),
                array(16, 8), array(27, 47), array(28, 48), array(29, 41), array(33, 39),
                array(34, 40), array(35, 33), array(36, 34), array(37, 35), array(38, 36),
                array(39, 37), array(40, 38), array(41, 9), array(47, 15), array(48, 16)),
        "L2" =>
            array(
                array(1, 41), array(7, 47), array(8, 48), array(9, 29), array(15, 27),
                array(16, 28), array(27, 15), array(28, 16), array(29, 9), array(33, 37),
                array(34, 38), array(35, 39), array(36, 40), array(37, 33), array(38, 34),
                array(39, 35), array(40, 36), array(41, 1), array(47, 7), array(48, 8)),
        "L'" =>
            array(
                array(1, 9), array(7, 15), array(8, 16), array(9, 41), array(15, 47),
                array(16, 48), array(27, 7), array(28, 8), array(29, 1), array(33, 35),
                array(34, 36), array(35, 37), array(36, 38), array(37, 39), array(38, 40),
                array(39, 33), array(40, 34), array(41, 29), array(47, 27), array(48, 28)),

        "B" =>
            array(
                array(1, 19), array(2, 20), array(3, 21), array(19, 45), array(20, 46),
                array(21, 47), array(25, 31), array(26, 32), array(27, 25), array(28, 26),
                array(29, 27), array(30, 28), array(31, 29), array(32, 30), array(33, 3),
                array(39, 1), array(40, 2), array(45, 39), array(46, 40), array(47, 33)),
        "B2" =>
            array(
                array(1, 45), array(2, 46), array(3, 47), array(19, 39), array(20, 40),
                array(21, 33), array(25, 29), array(26, 30), array(27, 31), array(28, 32),
                array(29, 25), array(30, 26), array(31, 27), array(32, 28), array(33, 21),
                array(39, 19), array(40, 20), array(45, 1), array(46, 2), array(47, 3)),
        "B'" =>
            array(
                array(1, 39), array(2, 40), array(3, 33), array(19, 1), array(20, 2),
                array(21, 3), array(25, 27), array(26, 28), array(27, 29), array(28, 30),
                array(29, 31), array(30, 32), array(31, 25), array(32, 26), array(33, 47),
                array(39, 45), array(40, 46), array(45, 19), array(46, 20), array(47, 21)),

        "D" =>
            array(
                array(13, 37), array(14, 38), array(15, 39), array(21, 13), array(22, 14),
                array(23, 15), array(29, 21), array(30, 22), array(31, 23), array(37, 29),
                array(38, 30), array(39, 31), array(41, 47), array(42, 48), array(43, 41),
                array(44, 42), array(45, 43), array(46, 44), array(47, 45), array(48, 46)),
        "D2" =>
            array(
                array(13, 29), array(14, 30), array(15, 31), array(21, 37), array(22, 38),
                array(23, 39), array(29, 13), array(30, 14), array(31, 15), array(37, 21),
                array(38, 22), array(39, 23), array(41, 45), array(42, 46), array(43, 47),
                array(44, 48), array(45, 41), array(46, 42), array(47, 43), array(48, 44)),
        "D'" =>
            array(
                array(13, 21), array(14, 22), array(15, 23), array(21, 29), array(22, 30),
                array(23, 31), array(29, 37), array(30, 38), array(31, 39), array(37, 13),
                array(38, 14), array(39, 15), array(41, 43), array(42, 44), array(43, 45),
                array(44, 46), array(45, 47), array(46, 48), array(47, 41), array(48, 42)),
    );
