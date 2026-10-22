import { copyFileSync, mkdirSync } from 'node:fs';

for (const [source, destination] of [
  ['node_modules/bootstrap/dist/css/bootstrap.min.css', 'vendor/assets/stylesheets/bootstrap.min.css'],
  ['node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'vendor/assets/javascripts/bootstrap.bundle.min.js'],
  ['node_modules/bootstrap/LICENSE', 'vendor/assets/BOOTSTRAP-LICENSE']
]) {
  mkdirSync(destination.substring(0, destination.lastIndexOf('/')), { recursive: true });
  copyFileSync(source, destination);
}
