# IFRS Grupo

Site web institutionnel d'IFRS Grupo (société de financement et de crédit), développé avec Laravel. Le site est disponible en **français** et **espagnol**, avec un formulaire de demande de crédit qui envoie un e-mail de confirmation au demandeur et une notification à l'équipe.

## Stack technique

- **Laravel 13** / PHP 8.3+
- **Base de données** : SQLite (par défaut, configurable)
- **Frontend** : Blade + template HTML/CSS/JS (Bootstrap, Owl Carousel), assets servis depuis `public/assets`
- **E-mails** : Mailable Laravel avec templates HTML de marque (logo, couleurs IFRS Grupo)

## Fonctionnalités

- Pages : accueil, à propos, nos offres/crédits, faire une demande, nos conditions, mentions légales, gestion des cookies
- Bascule de langue FR / ES avec préfixe d'URL (`/fr/...`, `/es/...`), redirection automatique de `/` vers `/fr`
- Formulaire "Faire une demande" avec validation et messages d'erreur traduits
- À la soumission :
  - Enregistrement de la demande en base (`application_submissions`)
  - E-mail de confirmation envoyé au demandeur, dans sa langue
  - E-mail de notification envoyé à l'équipe (adresse configurable), avec le détail du dossier et `Reply-To` vers le demandeur
- Carousel de la page d'accueil (Owl Carousel)

## Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
npm install && npm run build   # si vous modifiez les assets front
php artisan serve
```

Le site est alors accessible sur `http://localhost:8000` (redirige vers `/fr`).

## Configuration des e-mails

Dans `.env` :

```
MAIL_MAILER=smtp                       # ou "log" pour écrire les e-mails dans storage/logs/laravel.log en dev
MAIL_HOST=...
MAIL_PORT=...
MAIL_USERNAME=...
MAIL_PASSWORD=...
MAIL_FROM_ADDRESS="contato@ifrs-grupo.com"
MAIL_FROM_NAME="${APP_NAME}"
MAIL_ADMIN_ADDRESS="contato@ifrs-grupo.com"   # adresse qui reçoit les notifications de demande
```

En local sans SMTP configuré, utilisez `MAIL_MAILER=log` ou un outil comme [Mailpit](https://github.com/axllent/mailpit) pour visualiser les e-mails envoyés.

## Structure du projet

```
app/
  Http/Controllers/PageController.php     # routes des pages + traitement du formulaire
  Http/Requests/ApplyNowRequest.php        # validation de la demande de crédit
  Mail/                                    # e-mails de confirmation / notification
  Models/ApplicationSubmission.php         # demandes de crédit enregistrées

resources/
  views/layouts/app.blade.php              # layout principal (header, footer, assets)
  views/pages/                             # une vue par page
  views/emails/                            # templates d'e-mails (layout de marque + contenu)

lang/
  fr/pages.php                             # toutes les chaînes traduites (FR)
  es/pages.php                             # toutes les chaînes traduites (ES)

public/assets/                             # CSS, JS, images, polices du template
routes/web.php                             # routes préfixées par locale ({locale}/...)
```

## Traductions

Tout le texte visible (pages + e-mails) passe par `__('pages....')`, avec les fichiers `lang/fr/pages.php` et `lang/es/pages.php`. Pour ajouter une chaîne : l'ajouter dans les deux fichiers avec la même clé, puis l'utiliser dans la vue via `__('pages.section.cle')`.

## Développement

```bash
php artisan route:list        # lister les routes disponibles
php artisan test               # lancer les tests
./vendor/bin/pint              # formatage du code (style Laravel)
```
