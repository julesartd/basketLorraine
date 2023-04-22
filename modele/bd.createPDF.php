<?php
   
        require("pdf/tfpdf.php");
        // // Activation de la classe

      
        $pdf = new tFPDF();

        // // Nouvelle page A4 (incluant ici logo, titre et pied de page)
        $pdf->AddPage();
        // // Polices par défaut : Helvetica taille 9
        $pdf->SetFont('Arial','',9);
        // // Couleur par défaut : noir
        
        

        // Centre le titre
        $pdf->Ln(10);
        $pdf->SetX((190-40)/2);
        // Couleur du texte et du fond du titre
        $pdf->SetDrawColor(0, 0, 0);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->SetTextColor(0, 0, 0);
        // Taille du contour
        $pdf->SetLineWidth(0,8);

        // Titre
        // Cellule (Longueur, Hauteur, Contenu, Bordure, nextline parametters, C=CENTER , Remplissage)
        $title = 'Match numéro '.$unMatch['num_match'].' du '.$unMatch['date_match'];
        $pdf->SetTitle($title);
        $pdf->Cell(60, 19, $title, 0, 0, 'C', true);
        // Saut de ligne
        $pdf->Ln(15);
        

        // Tableau Info
        // Ligne 1
        $pdf->Ln(10);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetX((150-60)/2);
        $pdf->Cell(120, 9,'Informations generales', 1, 1, 'C'); 
        $pdf->SetX((150-60)/2);

        //Ligne 2 
        $pdf->Cell(60, 10, 'Numero du match :', 1, 0, 'C');
        $pdf->Cell(60, 10, $unMatch['num_match'] , 1, 1, 'C');

        $pdf->SetX((150-60)/2);

        //Ligne 3
        $pdf->Cell(60, 10, 'Date du match :', 1, 0, 'C');
        $pdf->Cell(60, 10, $unMatch['date_match'].' à '.$unMatch['heure_match'] , 1, 1, 'C');

        $pdf->SetX((150-60)/2);

        //Ligne 4
        $pdf->Cell(60, 10, 'Nom des équipes :', 1, 0, 'C');
        $pdf->Cell(60, 10, $unMatch['equipe1'].' vs '.$unMatch['equipe2'] , 1, 1, 'C');

        $pdf->SetX((150-60)/2);

        //Ligne 5
        $pdf->Cell(60, 10, 'Nom des arbitres :', 1, 0, 'C');
        $pdf->Cell(60, 10, $unMatch['arbitreP'].' et '.$unMatch['arbitreS'] , 1, 1, 'C');

        $pdf->SetX((150-60)/2);

        //Ligne 6
        $pdf->Cell(60, 10, 'Montant des deplacements des arbitres :', 1, 0, 'C');
        $pdf->Cell(60, 10, $unMatch['arbitreP'].' : '.$unMatch['montant_deplt_p'].' '.$unMatch['arbitreS'].' : '.$unMatch['montant_deplt_s'] , 1, 1, 'C');
   
      
        ob_end_clean();
        $pdf->Output('I', 'Match.pdf');
        
?>