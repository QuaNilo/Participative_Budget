<?php

namespace App\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use App\Models\Settings;

class SettingsTable extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table): Table
    {
        $newModel = new Settings();
        return $table
            ->query(Settings::query())
            ->columns([
                TextColumn::make("require_cc_vote_create")
                ->label($newModel->getAttributeLabel("require_cc_vote_create"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("require_address_vote_create")
                ->label($newModel->getAttributeLabel("require_address_vote_create"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("allow_change_lang")
                ->label($newModel->getAttributeLabel("allow_change_lang"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("address")
                ->label($newModel->getAttributeLabel("address"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("map_lat")
                ->label($newModel->getAttributeLabel("map_lat"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("map_lng")
                ->label($newModel->getAttributeLabel("map_lng"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("nome_cm")
                ->label($newModel->getAttributeLabel("nome_cm"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("email_cm")
                ->label($newModel->getAttributeLabel("email_cm"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("facebook")
                ->label($newModel->getAttributeLabel("facebook"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("instagram")
                ->label($newModel->getAttributeLabel("instagram"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("twitter")
                ->label($newModel->getAttributeLabel("twitter"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("linkedin")
                ->label($newModel->getAttributeLabel("linkedin"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("youtube")
                ->label($newModel->getAttributeLabel("youtube"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("website_cm")
                ->label($newModel->getAttributeLabel("website_cm"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("telephone_cm")
                ->label($newModel->getAttributeLabel("telephone_cm"))
                ->sortable()
                ->toggleable()
                ->searchable(),
                TextColumn::make('created_at')
                    ->label($newModel->getAttributeLabel('created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label($newModel->getAttributeLabel('updated_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                //TextColumn::make('id'),
                //TextColumn::make('name')->sortable()->searchable()->toggleable(),
                //TextColumn::make('body')->description(fn (Demo $model): string => $model->statusLabel),
                //TextColumn::make('body')->searchable(isIndividual: true, isGlobal: true)->toggleable(),
                //TextColumn::make('status')->formatStateUsing(fn (Demo $model): string => $model->statusLabel)->searchable(isIndividual: true, isGlobal: false)->toggleable(),
                //TextColumn::make('created_at')->dateTime()->toggleable()->searchable(isIndividual: true, isGlobal: false),

                /*SelectColumn::make('status')
                ->searchable(isIndividual: true, isGlobal: true)
                ->options(Demo::getStatusArray()),*/
            ])
            ->filters([
                /*Filter::make('statusActive')
                ->label($newModel->getAttributeLabel('status'))
                ->query(fn (Builder $query): Builder => $query->where('status', Demo::STATUS_ACTIVE))
                ->label('Estado ativo')
                ->toggle(),
                SelectFilter::make('status')
                ->label($newModel->getAttributeLabel('status'))
                ->multiple()
                ->options(Demo::getStatusArray())*/
            ])
            ->actions([
                Action::make('edit')
                ->label(__('Update'))
                ->url(fn (Settings $record): string => route('settings.edit', ['settings' => $record]))
                ->icon('heroicon-o-pencil')
                //->color('danger')
            ])
            ->bulkActions([
                //BulkActionGroup::make([
                BulkAction::make('delete')
                ->requiresConfirmation()
                ->action(fn (Collection $records) => $records->each->delete())
                //]),
            ])
            ->defaultSort('id', 'desc')
            ->recordUrl(
                fn (Model $record): string => route('settings.show', ['settings' => $record]),
            )
            //->striped()
            ->persistFiltersInSession()
            ->persistSearchInSession()
            ->defaultPaginationPageOption(25);
    }

    public function render() : View
    {
        return view('settings.table');
    }
}
