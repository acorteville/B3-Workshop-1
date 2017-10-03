# WORKSHOP : Projet du Groupe 4

Membres du groupe : BAUDUIN Lucas, BARTHOLOME Pierre-Henry, DUBUS Alexis, GHERISSI Vianney et RIVET Arnaud.









$files = getFilesOfRequirement(1);
foreach ($files as $aFile) {
    echo $aFile->name;
}

$keys = getKeysOfRequirement(1);
foreach ($keys as $aKey) {
    echo $aKey->successfactors;
}


// Création d'un besoin
// $aRequirement = new Requirement(NULL, "Test", "Description", NULL, NULL, 4, 2, "1234567", "1234567", 1234.9, "Win", 1, 1);

// Sauvegarde d'un besoin
// // $aRequirement->save();

// Mise à jour d'un besoin
// $aRequirement->update(6, "Nouveau titre", "Nouvelle description", NULL, NULL, 6, 5, "6 Rue de la Gare, 59000 Lille, FRANCE", "12345, 12345", 3000.0, "Open", 1, 1);


// Création d'une clé
// $aKey = new Key(6, NULL, "Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.");

// Sauvegarde d'une clé
// $aKey->save();

// Mise à jour d'une clé
// $aKey->update(3, 6, "test 2");
