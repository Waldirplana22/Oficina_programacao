using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using Swashbuckle.AspNetCore;
using api_livraria.db;

var builder = WebApplication.CreateBuilder(args);

builder.Services.AddSwaggerGen();
builder.Services.AddEndpointsApiExplorer();

var app = builder.Build();

app.UseHttpsRedirection();
app.UseSwagger();
app.UseSwaggerUI();

app.MapGet("/api/autores", ([FromServices] DbLivrariaContext _db,
) =>
{
    var query = _db.TbAutor.AsQueryable<TbAutor>();
    var autores = query.ToList<TbAutor>();
    return Results.Ok(autores);
});

app.Run();
